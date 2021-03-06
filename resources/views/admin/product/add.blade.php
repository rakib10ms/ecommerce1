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

        <form action="{{url('insert-product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-5 mb-3">

                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="cate_id">
                          <option required>select Category</option>
                          @foreach($category as $item)

                          <option value="{{$item->id}}"> {{$item->name}}</option>
  
                          @endforeach
                        </select>
                      </div>
               
                </div>
                <div class="col-md-6 mb-3">
                    <label>Name <span> *</span></label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Slug <span> *</span></label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="col-md-6 mb-3">
                    <label> Small Description <span> *</span></label>
                        <textarea  rows="3" class="form-control" name="small_description" > </textarea>
                </div>   

                  <div class="col-md-6 mb-3">
                    <label> Description <span> *</span></label>
                        <textarea  rows="3" class="form-control" name="description" > </textarea>
                </div>
           
                <div class="col-md-6 mb-3">
                    <label>Original Price</label>
                    <input type="number" class="form-control"  name="original_price">
                </div> 
                <div class="col-md-6 mb-3">
                    <label>Selling Price</label>
                    <input type="number" class="form-control"  name="selling_price">
                </div> 
                <div class="col-md-6 mb-3">
                    <label>Tax</label>
                    <input type="number" class="form-control"  name="tax">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label>Quantity</label>
                    <input type="number" class="form-control"  name="qty">
                </div> 
                <div class="col-md-6 mb-3">
                    <label>Status </label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Trending </label>
                    <input type="checkbox" name="trending">
                </div>

                 <div class="col-md-6 mb-3">
                    <label>On Sale </label>
                    <input type="checkbox" name="on_sale">
                </div>

                 <div class="col-md-6 mb-3">
                    <label>Top Viewed </label>
                    <input type="checkbox" name="top_viewed">
                </div>

                 <div class="col-md-6 mb-3">
                    <label>Hot Item </label>
                    <input type="checkbox" name="hot_item">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Best Seller </label>
                    <input type="checkbox" name="best_seller">
                </div>

                 <div class="col-md-12 mb-3">
                    <label>Meta tittle <span> *</span></label>
                    <input type="text" class="form-control" name="meta_tittle">
                </div> 
                 <div class="col-md-6 mb-3">
                    <label>Meta Keywords<span> *</span> </label>
                    <textarea name="meta_keywords" rows="3" class="form-control" > </textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label>Meta Description <span> *</span></label>
                     <textarea  rows="3" class="form-control" name="meta_description"> </textarea>
                </div>
                  
                  <div class="col-md-6 mb-3">
                    <label>Image </label>
                    <input type="file" class="form-control" name="image">
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