<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Auth;
use App\Product;
use App\ProductDetail;
use App\Category;
use App\Wishlist;
use App\Banner;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        View::composer('front_end.layouts.topheader', function($view){
            
            if($user = Auth::user()){
                
                $wishlist_items = Wishlist::where('user_id', $user->id)->get();
                
                $view->with('wishlist_items',$wishlist_items);
            }

        });

        View::composer('front_end.layouts.slider', function($view){
            
     
            $banners = Banner::where('publication_status', 1)->limit(5)->get();
            
            $view->with('banners',$banners);
           

        });
        View::composer('front_end.pages.home', function($view){

            $categories = Category::where('publication_status',1)->get();
            
            $productDetails = ProductDetail::where('pro_status',1)->latest()->get();
            
            $view->with('productDetails',$productDetails)->with('categories',$categories);
        });


        
        View::composer('front_end.pages.show_all_product', function($view){

            $categories = Category::where('publication_status',1)->get();
            
            
            $productDetails = ProductDetail::where('pro_status',1)->get();
            
            $view->with('productDetails',$productDetails)->with('categories',$categories);
        });

        View::composer('front_end.layouts.sidebar_category', function($view){

            $categories = Category::where('publication_status',1)->get();
            
            $view->with('categories',$categories);
        });

        View::composer('front_end.layouts.sidebar_all_product', function($view){

            $categories = Category::where('publication_status',1)->get();
            
            $view->with('categories',$categories);
        });

        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
