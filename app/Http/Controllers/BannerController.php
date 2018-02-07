<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Banner;
use Image;

class BannerController extends Controller
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
        $banners = Banner::latest()->get();

        return view ('back_end.pages.banner.view_banner', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('back_end.pages.banner.create_banner');
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

            'banner_name' => 'required|min:3',
            'banner_image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //dd($request->all());
        if($validate){

            //Insertion
            $banner = new Banner;
            $image = $request->file('banner_image');
            $filename  = 'banner-' . time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('/images/banner/' . $filename);
            
            Image::make($image->getRealPath())->resize(1920, 720)->save($path);
            
            $banner->name = request ('banner_name');
            $banner->image = $filename;
            $banner->publication_status = request ('banner_status');

            $banner->save();


            return redirect()->route('bannerIndex')->withMsgsuccess('Banner created successfully');

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
        $banner = Banner::find($id);
        return view('back_end.pages.banner.edit_banner',compact('banner'));
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
        
        $banner = Banner::find($id);
        //Validation
        $validate = $this->validate(request(),[

            'banner_name' => 'required|min:3',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('banner_image')){

                $image = $request->file('banner_image');

                $filename  = 'banner-' . time() . '.' . $image->getClientOriginalExtension();

                $path = public_path('/images/banner/' . $filename);
                
                Image::make($image->getRealPath())->resize(1920, 720)->save($path);
                //delete previous image.
                $old_image = $banner->image;
                Storage::delete("banner/$old_image");

                $banner->image = $filename;
        }
        //Update
        $banner->name = request ('banner_name');
        $banner->publication_status = request ('banner_status');

        $banner->save();

        
        return redirect()->route('bannerIndex')->with('msgsuccess','Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::find($id)->delete();
        return back()->with('msgsuccess','Banner deleted successfully');
    }
}
