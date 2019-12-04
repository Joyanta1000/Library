
@extends('admin.layouts.default')

@section('content')
 <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ URL::to('/admin/own')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Users Table</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Users Table </div>

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
                    <th>User ID</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>NID</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Image</th>
        <th>Password</th>
        <th>Approval</th>
        <th>Action</th>
                  </tr>
                </thead>
               
                <tbody>
                   @foreach($people as $p)
      <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->user_name }}</td>
        <td>{{ $p->user_email }}</td>
        <td>{{ $p->nid }}</td>
        <td>{{ $p->phone }}</td>
        <td>{{ $p->address }}</td>
        <td><img src="{{asset($p->name)}}"  width="70" height="70"></td>
        <td>{{ $p->password }}</td>
        <td>


<form method="post" action="{{ URL::to('/updateul/'.$p->id) }}" >

  {{ csrf_field()}}
          <select name="approval" class="btn btn-primary">
          <option value="{{ $p->approval }}" style="background-color: indigo; color:white; "> {{ $p->approval }}</option>
          <option value="Approved" style="background-color: green; color:white;" > Approve </option>
          <option value="Disabled" style="background-color: red; color:white;"> Disable </option>

        </select>
<button type="submit" class="btn-primary" onclick="return confirm('Are you sure you want to update this ?');">Take</button> 
</form>
      </td>
        
        <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this ?');" href="/deleteul/{{$p->id}}">Delete </a></td>
       


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

