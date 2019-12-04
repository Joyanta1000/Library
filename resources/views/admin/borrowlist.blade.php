
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
            Records Table </div>

<div style="padding-left: 300px;">
    @if(session()->has('message'))
    <div class="alert alert-success" style="width: 500px; text-align: center;">
      {{session()->get('admin_name')}} !!!
        {{ session()->get('message') }}
    </div>
@endif
</div>

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
        <th>Action</th>
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
         <td>
<form method="post" action="{{ URL::to('/updateborrowl/'.$b->id) }}" >

  {{ csrf_field()}}
          <select name="s" class="btn-danger">
          <option value="{{ $b->s }}" style="background-color: red; color:white; "> {{ $b->s }}</option>
          <option value="Approved" style="background-color: green; color:white;" > Approve </option>
          

        </select>
<button type="submit" class="btn-primary">Take</button> 
</form>
      </td>
        
        <td><a class="btn btn-danger" href="/deletebl/{{$b->id}}"><button class="btn-danger">Delete</button> </a></td>
        
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