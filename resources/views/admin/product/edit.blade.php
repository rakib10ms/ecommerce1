@extends('layouts.admin')
@section('content')
<style>
    label span{
        color:red;
    }
    </style>
<div class="card">
    <div class="card-header">
       <h4> Add Product</h4>
    </div>
    <div class="card-body">
        @include('layouts.message')

        <form action="{{url('/product-update',$editProduct->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-5 mb-3">

                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="cate_id">
                          <option required>select Category</option>
                          @foreach($category as $item)

                          <option value="{{$item->id}}" {{$editProduct->cate_id==$item->id?'selected':''}}> {{$item->name}}</option>
  
                          @endforeach
                        </select>
                      </div>
               
                </div>
                <div class="col-md-6 mb-3">
                    <label>Name <span> *</span></label>
                    <input type="text" class="form-control" name="name" value="{{$editProduct->name}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Slug <span> *</span></label>
                    <input type="text" class="form-control" name="slug" value="{{$editProduct->slug}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label> Small Description <span> *</span></label>
                        <textarea  rows="3" class="form-control" name="small_description" > {{$editProduct->small_description}}"</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label>Description <span> *</span></label>
                        <textarea name="description" rows="3" class="form-control" >{{$editProduct->name}} </textarea>
                </div>
          
                <div class="col-md-6 mb-3">
                    <label>Original Price</label>
                    <input type="number" class="form-control"  name="original_price" value="{{$editProduct->original_price}}">
                </div> 
                <div class="col-md-6 mb-3">
                    <label>Selling Price</label>
                    <input type="number" class="form-control"  name="selling_price" value="{{$editProduct->selling_price}}">
                </div> 
                <div class="col-md-6 mb-3">
                    <label>Tax</label>
                    <input type="number" class="form-control"  name="tax" value="{{$editProduct->tax}}">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label>Quantity</label>
                    <input type="number" class="form-control"  name="qty" value="{{$editProduct->qty}}">
                </div> 
                <div class="col-md-6 mb-3">
                    <label>Status </label>
                    <input type="checkbox" name="status" {{$editProduct->status==true ?'checked': ''}}>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Trending </label>
                    <input type="checkbox" name="trending" {{$editProduct->trending==true ?'checked': ''}}>
                </div>

                 <div class="col-md-12 mb-3">
                    <label>Meta tittle <span> *</span></label>
                    <input type="text" class="form-control" name="meta_tittle" value="{{$editProduct->meta_tittle}}">
                </div> 
                 <div class="col-md-6 mb-3">
                    <label>Meta Keywords<span> *</span> </label>
                    <textarea name="meta_keywords" rows="3" class="form-control" > {{$editProduct->meta_keywords}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label>Meta Description <span> *</span></label>
                     <textarea  rows="3" class="form-control" name="meta_description">{{$editProduct->meta_description}}</textarea>
                </div>
                  
                  <div class="col-md-6 mb-3">
                    <label>Image </label>
                    {{$editProduct->image}}
                    <input type="file" class="form-control" name="image" value="{{$editProduct->image}}">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>

                </div>
            </div>
        </form>
    </div>
</div>
    
@endsection