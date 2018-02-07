<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Product;
use App\ProductDetail;
use App\Inventory;
class ProductBackEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get All the latest product.
        $products = Product::latest()->get();    

        return view('back_end.pages.product.view_product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::published()->pluck('cat_name','id');

        return view('back_end.pages.product.create_product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        //Form Validation

        $validate = $this->validate(request(),[
            'product_code' => 'required|min:3|unique:products,pro_code',
            'product_level' => 'required',
            'product_price' => 'required',
            'product_color' => 'required',
            'product_category' => 'required',
            'product_description' => 'required',
            'product_stock' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if(request('colors')){

            $product_colors = implode(", ", $request->get('colors'));
        }
        if(request('size')){

            $product_size = implode(", ",  $request->get('size'));
        }
        

        $image = $request->file('product_image');
        
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/product');

        $image->move($destinationPath, $image_name);
        
        if($validate){
            
            $this->saveProductInfo($request, $product_colors, $product_size, $image_name);
            return redirect('/dashboard/products/')->withMsgsuccess('Product Created Successfully');

        }else{

            return back()->withInput();
        }
    }

    public function saveProductInfo(Request $request, $product_colors, $product_size, $image_name)
    {
        $product = Product::create([
            'pro_code' => request('product_code'),
            'pro_name' => request('product_name'),  
            'category_id' => request('product_category'),     
        ]);
        $productDetail = ProductDetail::create([
            'pro_info' => request('product_description'),
            'pro_price' => request('product_price'),
            'pro_color' => strtolower(request('product_color')),
            'pro_level' => request('product_level'),
            'pro_image' => $image_name,
            'pro_status' => request('product_status'),
            'pro_weight' => request('product_weight'),
            'pro_size' => $product_size,
            'pro_other_colors' => $product_colors,
            'product_id' => $product->id, 
        ]);
        $inventory = Inventory::create([
            'product_id' => $product->id,
            'quantity_in_stock' => request('product_stock'),      
        ]);
        
        if($product && $productDetail && $inventory){
            return true;
        }
    }

    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        
        $product_colors = explode(", ", $product->productDetail->pro_other_colors);
        $product_sizes = explode(", ", $product->productDetail->pro_size);
        
        $categories = Category::published()->pluck('cat_name','id');
        return view('back_end.pages.product.edit_product', compact('product','categories','product_colors','product_sizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $this->validate(request(),[
            'product_code' => 'required|min:3|unique:products,pro_code,'.$id,
            'product_level' => 'required',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_description' => 'required',
            'product_stock' => 'required',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if($validate){

            $product = Product::find($id);

            if(request('colors')){

                $product_colors = implode(", ", $request->get('colors'));
            }
            if(request('size')){

                $product_size = implode(", ",  $request->get('size'));
            }
            
            
            
            if($request->hasFile('product_image')){

                $image = $request->file('product_image');

                $image_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/product');                 
                $image->move($destinationPath, $image_name); 
                //delete previous image.
                $old_image = $product->productDetail->pro_image;
                Storage::delete("product/$old_image");
                $product->productDetail->pro_image = $image_name;
            }

            $product->pro_code = $request->product_code;
            $product->pro_name = $request->product_name;
            $product->category_id = $request->product_category;
            $product->productDetail->pro_info = $request->product_description;
            $product->productDetail->pro_other_colors = $product_colors;
            $product->productDetail->pro_price = $request->product_price;
            $product->productDetail->pro_size = $product_size;
            $product->productDetail->pro_level = $request->product_level;
            $product->productDetail->pro_status = $request->product_status;
            $product->inventory->quantity_in_stock = $request->product_stock;
            
            
            $product->save();
            $product->productDetail->save();
            $product->inventory->save();
            
            return redirect('/dashboard/products')->withMsgsuccess('Product Updated Successfully');
            
        }else{
            
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
