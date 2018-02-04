<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Product;
use App\ProductDetail;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
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
