
@extends('user.layouts.default')

@section('content')
 <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ URL::to('/user/uown')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Your transaction Table</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Transaction Table </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ISBN</th>
        <th>User</th>
        <th>User ID</th>
        <th>Stock</th>
        <th>Borrowed Time</th>
        <th>Returned Time</th>
        <th>Approval</th>
        
                  </tr>
                </thead>
               
                <tbody>
                   @foreach($borrows as $b)
      <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->user_email }}</td>
        <td>{{ $b->uid }}</td>
        <td>{{ $b->stock }}</td>
        <td>{{ $b->btime }}</td>
        <td>{{ $b->rtime }}</td>
        <td>{{ $b->s }}</td>

       
        
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