<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\BestProduct;
use Illuminate\Http\Request;
use App\Models\HotItem;
use DB;

class FrontendController extends Controller
{
 
    public function index(){


        $allCategories=Category::all();
        // dd($allCategories);
         $hotitems=HotItem::orderBy('id','desc')->limit(15)->get();
        $trendingCategories=DB::table('categories')->where('popular','1')->get();
        $on_sale=DB::table('best_products')->where('on_sale','1')->limit(3)->orderBy('id','desc')->get();
        $best_seller=DB::table('best_products')->where('best_seller','1')->limit(3)->orderBy('id','desc')->get();
        $top_viewed=DB::table('best_products')->where('top_viewed','1')->limit(3)->orderBy('id','desc')->get();
        return view('frontend.index',compact('trendingCategories','on_sale','best_seller','top_viewed','hotitems','allCategories'));

    }


      public function viewCategory($slug){


        $allCategories=Category::all();

        $category_slug=Category::where('slug',$slug)->first();
        $viewProducts=Product::where('cate_id',$category_slug->id)->get();
        // dd($viewProducts);
         
        return view('frontend.view-category',compact('allCategories','viewProducts'));

    }

    public function productDetails($slug){

      $productDetails=HotItem::where('slug',$slug)->first();
      // dd($productDetails);
      return view('frontend.product-details',compact('productDetails'));
    }


    public function allProduct(){
      $allProduct=Product::all();
      // dd($allProduct);
      return view('frontend.allProduct',compact('allProduct'));
    }

}
