<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
// use Validator;
use File;

class ProductController extends Controller
{
    public function index(){
        $products=DB::table('products')->join('categories','products.cate_id' ,'=' ,'categories.id')->select('products.*','categories.name as cate_name')->orderBy('id','desc')->get();
     
    // $products=Product::orderBy('id','desc')->get();

        return view('admin.product.index',compact('products'));
    }
    public function add(){
        $category=Category::all();
        return view('admin.product.add',compact('category'));
    }

    public function insert(Request $request){

         // $validatedData = Validator::make($request->all(), [
              $request->validate([

            'image' => 'required|image',
            'slug' => 'required|unique:products',
            'name' => 'required|unique:products',
            'cate_id' => 'required',
            'small_description' => 'required',
            'original_price' => 'required',
            'selling_price' => 'required',
            'tax' => 'required',
            'qty' => 'required',
            'meta_tittle' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);


        $products=new Product();
      
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/products/'),$filename);
            $products->image=$filename;
        
        }
        $products->cate_id=$request->input('cate_id');
        $products->name=$request->input('name');
        $products->slug=$request->input('slug');
        $products->small_description=$request->input('small_description');
        $products->original_price=$request->input('original_price');
        $products->selling_price=$request->input('selling_price');
        $products->tax=$request->input('tax');
        $products->qty=$request->input('qty');
        $products->status=$request->input('status')==TRUE?'1':'0';
        $products->trending=$request->input('trending')==TRUE?'1':'0';
        $products->trending=$request->input('hot_item')==TRUE?'1':'0';
        $products->trending=$request->input('top_viewed')==TRUE?'1':'0';
        $products->trending=$request->input('on_sale')==TRUE?'1':'0';
        $products->trending=$request->input('best_seller')==TRUE?'1':'0';
        $products->meta_tittle=$request->input('meta_tittle');
        $products->meta_keywords=$request->input('meta_keywords');
        $products->meta_description=$request->input('meta_description');
        $products->save();
        return redirect('/products')->with('status','product added successfully');

  
    
    }


    public function edit($id){

        $editProduct=Product::find($id);
        $category=Category::all();

        return view ('admin.product.edit',compact('editProduct','category'));
    }


    public function update(Request $request,$id){

        $products=Product::find($id);
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/products/'),$filename);
            $products->image=$filename;
        

            $products->cate_id=$request->input('cate_id');
            $products->name=$request->input('name');
            $products->slug=$request->input('slug');
            $products->description=$request->input('description');
            $products->small_description=$request->input('small_description');
            $products->original_price=$request->input('original_price');
            $products->selling_price=$request->input('selling_price');
            $products->tax=$request->input('tax');
            $products->qty=$request->input('qty');
            $products->status=$request->input('status')==TRUE?'1':'0';
            $products->trending=$request->input('trending')==TRUE?'1':'0';
            $products->meta_tittle=$request->input('meta_tittle');
            $products->meta_keywords=$request->input('meta_keywords');
            $products->meta_description=$request->input('meta_description');
            $products->save();
            return redirect('/products')->with('status','product added successfully');

        }

        else{
            $products->cate_id=$request->input('cate_id');
            $products->name=$request->input('name');
            $products->slug=$request->input('slug');
            $products->description=$request->input('description');
            $products->small_description=$request->input('small_description');
            $products->original_price=$request->input('original_price');
            $products->selling_price=$request->input('selling_price');
            $products->tax=$request->input('tax');
            $products->qty=$request->input('qty');
            $products->status=$request->input('status')==TRUE?'1':'0';
            $products->trending=$request->input('trending')==TRUE?'1':'0';
            $products->meta_tittle=$request->input('meta_tittle');
            $products->meta_keywords=$request->input('meta_keywords');
            $products->meta_description=$request->input('meta_description');
            $products->save();
    
        }

        return redirect('/products')->with('status','product added successfully');

    }


    
    public function destroy($id){

        $deleteProduct=Product::find($id);
        $image='assets/uploads/products/'.$deleteProduct->image;
        if(File::exists($image)){
            File::delete($image);
        }

      
        $deleteProduct->delete();

        return redirect('/products')->with('status','product deleted successfully');


      
    }

}
