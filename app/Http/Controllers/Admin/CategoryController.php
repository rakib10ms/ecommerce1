<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use File;
use DB;
// use Validator;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
       
        return view('admin.category.index',compact('categories'));
    }


    public function add(){
        return view('admin.category.add');
    }
    public function insert(Request $request){
         // $validatedData = Validator::make($request->all(), [
                $request->validate([

            'name' => 'required',
            'image' => 'required|image',
            'slug' => 'required|unique:categories',
            'description' => 'required',
            'meta_tittle' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);


   
        $category=new Category();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/category/'),$filename);
            $category->image=$filename;
        
        }
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status')==TRUE?'1':'0';
        $category->popular=$request->input('popular')==TRUE?'1':'0';
        $category->meta_tittle=$request->input('meta_tittle');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->meta_description=$request->input('meta_description');
         $category->save();
        return redirect('/categories')->with('status','category added successfully');
    }

    public function edit($id){

           $editData=Category::find($id);
         return view('admin.category.edit',compact('editData'));
    }


    public function update(Request $request ,$id){

        $category=Category::find($id);
        if($request->hasFile('image')){
            $path='assets/uploads/category/'.$category->image;
           if(File::exists($path)){
               File::delete($path);

           }
           $file=$request->file('image');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/category/'),$filename);
            $category->image=$filename;


        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status')==TRUE?'1':'0';
        $category->popular=$request->input('popular')==TRUE?'1':'0';
        $category->meta_tittle=$request->input('meta_tittle');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->meta_description=$request->input('meta_description');
         $category->save();
        return redirect('/categories')->with('status','category updated successfully');

 }
 else{
    $category->name=$request->input('name');
    $category->slug=$request->input('slug');
    $category->description=$request->input('description');
    $category->status=$request->input('status')==TRUE?'1':'0';
    $category->popular=$request->input('popular')==TRUE?'1':'0';
    $category->meta_tittle=$request->input('meta_tittle');
    $category->meta_keywords=$request->input('meta_keywords');
    $category->meta_description=$request->input('meta_description');
     $category->save();
    return redirect('/categories')->with('status','category updated successfully');
 }
}

public function delete($id){
    $category=Category::find($id);
        $path='assets/uploads/category/'.$category->image;
       if(File::exists($path)){
           File::delete($path);
       }
    $category->delete();
    return redirect('/categories')->with('status','category deleted successfully');


}
}
