@extends('layouts.admin')
@section('content')
<style>
    label span{
        color:red;
    }
    </style>
<div class="card">
    <div class="card-header">
       <h4> Add Category</h4>
    </div>
    <div class="card-body">
        @include('layouts.message')

        <form action="{{url('insert-category')}}" method="POST" enctype="multipart/form-data">
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
                <div class="col-md-12 mb-3">
                    <label>Description <span> *</span></label>
                        <textarea name="description" rows="3" class="form-control" > </textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Status </label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Popular </label>
                    <input type="checkbox"  name="popular">
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