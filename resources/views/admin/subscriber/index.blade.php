@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
    <h4>All Subscribers </h4>
    </div>
    <div class="card-body">
      @include('layouts.message')
        <table class="table table-bordered " id="example1">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Emal</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allSubscriber as $id=>$subscriber)
              
                <tr>
                    <th scope="row">{{$id+1}}</th>
                    <td>{{$subscriber->email}}</td>
                    <td>
                      <a href="" class="btn btn-primary">Edit  </a>
                      <a href="" class="btn btn-danger">Delete  </a>
                    </td>
                  </tr>
                    
            @endforeach
             
            </tbody>
          </table>
    </div>
</div>
    
@endsection