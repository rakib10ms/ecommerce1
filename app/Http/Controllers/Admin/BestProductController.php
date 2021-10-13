<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\BestProduct;
use File;

class BestProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $best_products=DB::table('best_products')->orderBy('id','desc')->get();
     

        return view('admin.best_product.index',compact('best_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.best_product.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([

            'image' => 'required|image',
            'slug' => 'required|unique:best_products',
            'name' => 'required|unique:best_products',
            'description' => 'required',
            'small_description' => 'required',
            'original_price' => 'required',
            'selling_price' => 'required',
            'tax' => 'required',
            'qty' => 'required',
            'meta_tittle' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);


            $products=new BestProduct();
      
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/best_products/'),$filename);
            $products->image=$filename;
        
        }
        $products->name=$request->input('name');
        $products->slug=$request->input('slug');
        $products->description=$request->input('description');
        $products->small_description=$request->input('small_description');
        $products->original_price=$request->input('original_price');
        $products->selling_price=$request->input('selling_price');
        $products->tax=$request->input('tax');
        $products->qty=$request->input('qty');
        $products->on_sale=$request->input('on_sale')==TRUE?'1':'0';
        $products->best_seller=$request->input('best_seller')==TRUE?'1':'0';
        $products->top_viewed=$request->input('top_viewed')==TRUE?'1':'0';
        $products->meta_tittle=$request->input('meta_tittle');
        $products->meta_keywords=$request->input('meta_keywords');
        $products->meta_description=$request->input('meta_description');
        $products->save();
        return redirect('/best-products')->with('status','Best product added successfully');

  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $editProduct=BestProduct::find($id);

        return view ('admin.best_product.edit',compact('editProduct'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $best_products=BestProduct::find($id);
        $path='assets/uploads/best_product/'.$best_products->image;
       if(File::exists($path)){
           File::delete($path);
       }
    $best_products->delete();
    return redirect('/best-products')->with('status','Best Products deleted successfully');



    }
}