<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Product;
class ReviewBackEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $reviews = Review::latest()->get();
        
        return view('back_end.pages.review.view_review', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $review = Review::find($id);

        return view('back_end.pages.review.edit_review', compact('review'));
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
        $rating = $request->get('rating');
        $product_id = $request->get('product');
        $product = Product::find($product_id);
        $validate = $this->validate(request(),[
            'name_in_review' => 'required',
            'review_status' => 'required',
        ]);

        Review::find($id)->update([

            'name' => request ('name_in_review'),
            'publication_status' => request ('review_status'),
            
        ]);

        // recalculate ratings for the specified product
        $product->recalculateRating($rating);

        return redirect()->route('reviewAll')->with('msgsuccess','Review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Review::find($id)->delete();

        return redirect()->back()->with('msgsuccess','Review deleted successfully');
    }
}
