<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        //
        $categories = Category::latest()->get();

        return view ('back_end.pages.category.view_category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('back_end.pages.category.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        //Validation
        $validate = $this->validate(request(),[

            'category_name' => 'required|min:3|unique:tbl_categories,name',
            'category_description' => 'required|min:3'
        ]);

        if($validate){

            //Insertion
            Category::create([
                'cat_name' => request ('category_name'),
                'cat_description' => request ('category_description')
            ]);

            return redirect('/dashboard/category')->with('msgsuccess','Category created successfully');

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
        //Get the data
        $category = Category::find($id);
        return view('back_end.pages.category.edit_category',compact('category'));
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
        //Update
        $catgoryUpdate = Category::find($id)->update([

                            'name' => request ('category_name'),
                            'description' => request ('category_description')

                        ]);

        if($catgoryUpdate){
            
            return redirect('/dashboard/category')->with('msgsuccess','Category updated successfully');
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
