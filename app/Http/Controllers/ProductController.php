<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();

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
            'product_code' => 'required|min:3|unique:tbl_products,pro_code',
            'product_level' => 'required',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_description' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $product_category = $request->get('product_category');
        $product_level = $request->get('product_level');

        $product_colors = implode(",", $request->get('colors'));
        $product_status = $request->get('product_status');

        $image = $request->file('product_image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/product');


        $image->move($destinationPath, $image_name);
        

        
        if($validate){
            Product::create([
                'pro_code' => request('product_code'),
                'pro_name' => request('product_name'),
                'pro_info' => request('product_description'),
                'pro_other_colors' => $product_colors,
                'pro_price' => request('product_price'),
                'pro_level' => $product_level,
                'pro_image' => $image_name,
                'pro_status' => $product_status,
                'cat_id' => $product_category,     
            ]);

            return redirect('/dashboard/products/')->withMsgsuccess('Category created successfully');

        }else{

            return back()->withInput();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
