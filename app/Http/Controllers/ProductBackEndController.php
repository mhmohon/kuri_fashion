<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Product;
use App\ProductDetail;
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
        $categories = Category::published();

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
            'product_category' => 'required',
            'product_description' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $product_colors = implode(",", $request->get('colors'));
        $product_size = implode(",",  $request->get('size'));

        $image = $request->file('product_image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/product');

        $image->move($destinationPath, $image_name);
        
        if($validate){
            
            $this->saveProductInfo($request, $product_colors, $product_size, $image_name);
            return redirect('/dashboard/products/')->withMsgsuccess('Category created successfully');

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
            'pro_level' => request('product_level'),
            'pro_image' => $image_name,
            'pro_status' => request('product_status'),
            'pro_size' => $product_size,
            'pro_other_colors' => $product_colors,
            'product_id' => $product->id, 
        ]);

        if($product && $productDetail){
            return true;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $product_colors = explode(",", $product->productDetail->pro_other_colors);
        $product_sizes = explode(",", $product->productDetail->pro_size);
        $categories = Category::published();
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
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if($validate){

            $product = Product::find($id);
            $product_colors = implode(",", $request->get('colors'));
            
            if($request->hasFile('product_image')){
                $image = $request->file('product_image');
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/product');                 
                $image->move($destinationPath, $image_name); 
                //delete previous image.
                $old_image = $product->pro_image;
                Storage::delete("product/$old_image");
                $product->pro_image = $image_name;
            }

            $product->pro_code = $request->product_code;
            $product->pro_name = $request->product_name;
            $product->pro_info = $request->product_description;
            $product->pro_other_colors = $product_colors;
            $product->pro_price = $request->product_price;
            $product->pro_level = $request->product_level;
            $product->pro_status = $request->product_status;
            $product->cat_id = $request->product_category;
            
            $product->save();
            //dd($request->all());
            
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
