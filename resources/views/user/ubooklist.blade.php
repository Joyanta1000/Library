
@extends('user.layouts.default')

@section('content')
 <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ URL::to('/user/uown')}}">Home</a>
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
        
                  </tr>
                </tfoot>
                <tbody>
                   @foreach($libraries as $l)
      <tr>
        <td><img src="{{asset($l->name)}}"  width="80" height="80"></td>
        <td>{{ $l->id }}</td>
        <td>{{ $l->ttl }}</td>
        <td>{{ $l->author }}</td>
        <td>{{ $l->category }}</td>
        <td>{{ $l->edition }}</td>
        <td>{{ $l->price }}</td>
        <td>{{ $l->stock }}</td>
      
        
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