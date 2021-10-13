@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
    <h4>All Categories </h4>
    </div>
    <div class="card-body">
      @include('layouts.message')
        <table class="table table-bordered "  id="example1">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as  $key => $category)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="category_image" class="cat-images"/>
                    </td>
                    <td>
                      <a href="{{url('edit-prod/'.$category->id)}}" class="btn btn-primary">Edit  </a>
                      <a href="{{url('delete-category/'.$category->id)}}" class="btn btn-danger">Delete  </a>
                    </td>
                  </tr>
                    
                @endforeach
             
            </tbody>
          </table>
    </div>
</div>
    
@endsection