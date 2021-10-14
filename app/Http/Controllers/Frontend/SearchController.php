<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class SearchController extends Controller
{
    public function index(Request $request ){

     $searchItem=$request->product;

       // $filterData = Product::where('name','LIKE','%'.$searchItem.'%')->get();

      $filterData= Product::where(function ($query) use($searchItem) {
        $query->where('name', 'like', '%' .$searchItem  . '%')
           ->orWhere('small_description', 'like', '%' . $searchItem. '%')
           ->orWhere('description', 'like', '%' . $searchItem. '%')
           ->orWhere('meta_keywords', 'like', '%' . $searchItem . '%')

      })
     ->get();

       dd($filterData);
        $allCategories=Category::all();
        return view('frontend.product-search',compact('allCategories'));
    }

   



}
