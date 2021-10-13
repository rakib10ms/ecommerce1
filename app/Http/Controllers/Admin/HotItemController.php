<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotItem;

class HotItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all=HotItem::orderBy('id','desc')->get();
        return view('admin.hot-item.index',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    return view('admin.hot-item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
         $request->validate([

            'image' => 'required|image',
            'slug' => 'required|unique:products',
            'name' => 'required|unique:products',
            'small_description' => 'required',
            'description' => 'required',
            'original_price' => 'required',
            'selling_price' => 'required',
            'tax' => 'required',
            'qty' => 'required',
            'meta_tittle' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

          $products=new HotItem();
      
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/hot-item/'),$filename);
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
        $products->status=$request->input('status');
        $products->meta_tittle=$request->input('meta_tittle');
        $products->meta_keywords=$request->input('meta_keywords');
        $products->meta_description=$request->input('meta_description');
        $products->save();
        return redirect('/hot-item')->with('status','Hot/New product added successfully');

  
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
        //
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
        //
    }
}
