
@extends('admin.layouts.default')

@section('content')
 <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ URL::to('/admin/own')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Books Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Books Table </div>
          <div class="card-body">
            <div class="table-responsive">


<div style="padding-left: 300px;">
    @if(session()->has('message'))
    <div class="alert alert-success" style="width: 500px; text-align: center;">
      {{session()->get('admin_name')}} !!!
        {{ session()->get('message') }}
    </div>
@endif
</div>

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Edition</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Image</th>
                    <th>ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Edition</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                   @foreach($libraries as $l)
      <tr>
        <td><img src="{{asset($l->name)}}"  width="70" height="70"></td>
        <td>{{ $l->id }}</td>
        <td>{{ $l->ttl }}</td>
        <td>{{ $l->author }}</td>
        <td>{{ $l->category }}</td>
        <td>{{ $l->edition }}</td>
        <td>{{ $l->price }}</td>
        <td>{{ $l->stock }}</td>
        <td><a class="btn btn-primary" href="{{URL::to('admin/editbl/'.$l->id)}}">EDIT</a>&nbsp;<a class="btn btn-danger" href="/delete/{{$l->id}}"><button class="btn-danger">Delete</button> </a></td>
        
      </tr>
      @endforeach
                 
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

        <p class="small text-center text-muted my-5">
          <em></em>
        </p>

      </div>


@stop