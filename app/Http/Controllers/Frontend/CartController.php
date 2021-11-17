<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cart; 
use App\Models\Product; 
use App\Models\HotItem; 
use Auth;
use DB;
class CartController extends Controller
{
    public function addProduct(Request $request){
        $product_id=$request->input('product_id');
        $product_qty=$request->input('product_qty');
        $product_name=Product::where('id',$request->input('product_id'))->pluck('name');

               if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first()){
                return response()->json(['status' =>$product_name. "Already Added To Cart"]);
            }
            else{
      
                $cartItem=new Cart();
                $cartItem->prod_id=$product_id;
                $cartItem->prod_qty=$product_qty;
                $cartItem->user_id=Auth::id();
                $cartItem->save();
               return response()->json(['status' => $product_name. "Added To Cart"]);


         
        }
         
 
      
    }
    
    public function viewCartProduct(){

        $user_id=Auth::id();
        $allItems=Cart::where('user_id',$user_id)->get();
        
    }
      
}
