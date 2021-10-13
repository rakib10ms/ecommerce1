@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
    <h4>All Categories </h4>
    <a href="{{route('add-best-product')}}" class="btn btn-primary float-right "> Add Best Products</a>
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
                <th scope="col">On sale</th>
                <th scope="col">Top Viewed</th>
                <th scope="col">Best sell</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody>

              @foreach($best_products as $key => $item)
              
                <tr>
                    <th scope="row">{{$key+1}}</th>

                    <td>{{$item->name}}</td>
                    <td>{{$item->small_description}}</td>
                    <td>{{$item->original_price}}</td>
                    <td>{{$item->selling_price}}</td>
                     <td>{{$item->qty}}</td>
                     <td> <span class="badge btn-danger"> {{$item->on_sale=='1'?'On Sale':''}} </span></td>
                     <td><span class="badge btn-danger"> {{$item->top_viewed=='1'?'Top Viewed':''}}</span></td>
                     <td><span class="badge btn-danger"> {{$item->best_seller=='1'?'Best Sale':''}}</span></td>

                    <td>
                        <img src="{{asset('assets/uploads/best_products/'.$item->image)}}" alt="category_image" class="cat-images"/>
                    </td>
                    <td>
                      <a href="{{route('edit-best-product',$item->id)}}" class="btn btn-primary">Edit  </a>
                      <a href="{{route('delete-best-product',$item->id)}}" class="btn btn-danger">Delete  </a>
                    </td>
                  </tr>
                    
            @endforeach
             
            </tbody>
          </table>
    </div>
</div>
    
@endsection