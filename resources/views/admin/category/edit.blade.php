@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
       <h4> Edit Category</h4>
    </div>
    <div class="card-body">
        <form action="{{url('update-category/'.$editData->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name </label>
                    <input type="text" class="form-control" name="name" value="{{$editData->name}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Slug </label>
                    <input type="text" class="form-control" name="slug" value="{{$editData->slug}}">
                </div>
                <div class="col-md-12 mb-3">
                    <label>Description </label>
                        <textarea name="description" rows="3" class="form-control" > {{$editData->description}}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Status </label>
                    <input type="checkbox" name="status" {{$editData->status =='1'?'checked':''}}>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Popular </label>
                    <input type="checkbox"  name="popular" {{$editData->popular =='1'?'checked':''}}>
                </div> 
                 <div class="col-md-12 mb-3">
                    <label>Meta tittle </label>
                    <input type="text" class="form-control" name="meta_tittle" value="{{$editData->meta_tittle}}">
                </div> 
                 <div class="col-md-6 mb-3">
                    <label>Meta Keywords </label>
                    <textarea name="meta_keywords" rows="3" class="form-control" > {{$editData->meta_keywords}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label>Meta Description </label>
                     <textarea  rows="3" class="form-control" name="meta_description">{{$editData->meta_description}} </textarea>
                </div>
                  
                  <div class="col-md-6 mb-3">
                    <label>Image </label>
                    {{asset('assets/uploads/category'.$editData->image)}}
                    <input type="file" class="form-control" name="image" value="{{$editData->image}}">
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