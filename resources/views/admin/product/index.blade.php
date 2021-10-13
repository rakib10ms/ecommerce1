@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
    <h4>All Categories </h4>
    </div>
    <div class="card-body">
      @include('layouts.message')
        <table class="table table-bordered"  id="example1">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Name</th>
                <th scope="col">Original Price</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as  $key =>  $item)
              
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$item->cate_name}}</td>

                    <td>{{$item->name}}</td>
                    <td>{{$item->original_price}}</td>
                    <td>{{$item->selling_price}}</td>
                    <td>
                        <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="category_image" class="cat-images"/>
                    </td>
                    <td>
                      <a href="{{url('/product-edit',$item->id)}}" class="btn btn-primary">Edit  </a>
                      <a href="{{url('/product-delete',$item->id)}}" class="btn btn-danger">Delete  </a>
                    </td>
                  </tr>
                    
            @endforeach
             
            </tbody>
          </table>
    </div>
</div>
    
@endsection