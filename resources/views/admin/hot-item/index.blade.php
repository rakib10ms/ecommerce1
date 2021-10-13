@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
    <h4>Hot Products </h4>
    <a href="{{route('add-hot-item')}}" class="btn btn-primary float-right "> Add Hot Products</a>
    </div>
    <div class="card-body">
      @include('layouts.message')
        <table class="table table-bordered"  id="example1">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Small Desc</th>
                <th scope="col">Original Price</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Status</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody>

              @foreach($all as  $key => $item)
              
                <tr>
                    <th scope="row">{{$key+1}}</th>

                    <td>{{$item->name}}</td>
                    <td>{{$item->small_description}}</td>
                    <td>{{$item->original_price}}</td>
                    <td>{{$item->selling_price}}</td>
                     <td>{{$item->qty}}</td>
                     <td> <span class="badge btn-danger"> 

                      @if ($item->status==1)
                      Hot
                      @elseif ($item->status==2)
                      New
                      @else
                      Null

                      @endif
                      </span></td>

                    <td>
                        <img src="{{asset('assets/uploads/hot-item/'.$item->image)}}" alt="category_image" class="cat-images"/>
                    </td>
                    <td>
                      <a href="{{url('/best-product-edit',$item->id)}}" class="btn btn-primary">Edit  </a>
                      <a href="{{url('/best-product-delete',$item->id)}}" class="btn btn-danger">Delete  </a>
                    </td>
                  </tr>
                    
            @endforeach
             
            </tbody>
          </table>
    </div>
</div>
    
@endsection