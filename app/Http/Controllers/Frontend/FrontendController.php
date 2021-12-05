<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{

  public function index(){


        $allCategories=Category::all();
         $hotitems=DB::table('products')->orderBy('id','desc')->where('hot_item','1')->where('status','1')->limit(15)->get();
         $trendingCategories=DB::table('categories')->where('popular','1')->get();
        $on_sale=DB::table('products')->orderBy('id','desc')->where('on_sale','1')->where('status','1')->limit(3)->get();
         $best_seller=DB::table('products')->orderBy('id','desc')->where('best_seller','1')->where('status','1')->limit(3)->get();
          $top_viewed=DB::table('products')->orderBy('id','desc')->where('top_viewed','1')->where('status','1')->limit(3)->get();
        return view('frontend.index',compact('trendingCategories','on_sale','hotitems','allCategories','best_seller','top_viewed'));

    }


      public function viewCategory($slug){


        $allCategories=Category::all();

        $category_slug=Category::where('slug',$slug)->first();
        $viewProducts=Product::where('cate_id',$category_slug->id)->get();
        // dd($viewProducts);
         
        return view('frontend.view-category',compact('allCategories','viewProducts'));

    }

    public function productDetails($slug){

      $productDetails=Product::where('slug',$slug)->first();
      return view('frontend.product-details',compact('productDetails'));
    }


    public function allProduct(){
      $allProduct=Product::all();
      $allCategories=Category::all();
      // dd($allProduct);
      return view('frontend.allProduct',compact('allProduct','allCategories'));
    }


    public function filterCategory(Request $request){

        $request->validate([

            'cate_id' => 'required',
            'price' => 'required',
           
        ]);


      $cate_id=$request->cate_id;
      $price=$request->price;
       
      if($price=='onetofive'){
        $min_price=100;
        $max_price=500;
        $result=Product::where('cate_id',$cate_id)->whereBetween('selling_price',[$min_price, $max_price])->get();
        return view('frontend.price-category-filter',compact('result'));
      }
     
      else if($price=='fivetoten'){
        $min_price=500;
        $max_price=1000;
        $result=Product::where('cate_id',$cate_id)->whereBetween('selling_price',[$min_price, $max_price])->get();
                return view('frontend.price-category-filter',compact('result'));

      }
      else if($price=='tentofiften'){
        $min_price=1000;
        $max_price=1500;
        $result=Product::where('cate_id',$cate_id)->whereBetween('selling_price',[$min_price, $max_price])->get();
                return view('frontend.price-category-filter',compact('result'));

      }
      else if($price=='fiftentotwentyfive'){
        $min_price=1500;
        $max_price=2500;
        $result=Product::where('cate_id',$cate_id)->whereBetween('selling_price',[$min_price, $max_price])->get();
                return view('frontend.price-category-filter',compact('result'));

      }
     else if($price=='twentyfivetofifty'){

        $min_price=2500;
        $max_price=5000;
        $result=Product::where('cate_id',$cate_id)->whereBetween('selling_price',[$min_price, $max_price])->get();
                return view('frontend.price-category-filter',compact('result'));

      }

      else if($price=='fiftytohundred'){

        $min_price=5000;
        $max_price=10000;
        $result=Product::where('cate_id',$cate_id)->whereBetween('selling_price',[$min_price, $max_price])->get();
                return view('frontend.price-category-filter',compact('result'));

      }


        $results =Product::where('cate_id',$cate_id)->get();
          // return view('frontend.allProduct',compact('results'));

    }




    public function check(){
      $categories=Category::all();
      return view('check',compact('categories'));
    }
    public function get($id){
      $categories=Product::where('cate_id',$id)->get();
    }

  
}
