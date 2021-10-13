@extends('layouts.admin')
@section('content')
<style>
    label span{
        color:red;
    }

    </style>
<div class="card">
    <div class="card-header">
       <h4> Add Hot Product</h4>
    </div>
    <div class="card-body">
        @include('layouts.message')

        <form action="{{route('store-hot-item')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
         
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
                <div class="col-md-12 mb-3">
                    <label>Description <span> *</span></label>
                        <textarea name="description" rows="3" class="form-control" > </textarea>
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

                <div class="form-check col-md-4 mb-5 px-2">
                  <input type="radio" name="status" id="flexRadioDefault1"  value="1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Hot
                  </label>
                </div>

                <div class="form-check col-md-4 mb-5 px-2">
                  <input  type="radio" name="status" id="flexRadioDefault2" value="2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    New
                  </label>
                </div>

                  <div class="form-check col-md-4 mb-5 px-2">
                  <input  type="radio" name="status" id="flexRadioDefault2"  value="3"checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    No Selected
                  </label>
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