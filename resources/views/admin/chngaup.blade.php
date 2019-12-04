<!-- <p>{{session()->get('admin_name')}}</p> -->

@extends('admin.layouts.default')
@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ URL::to('/admin/own')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Admins info update form</li>
        </ol>
        <div class="card">
        	<div class="col-md-12">
        		@if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
    <p>{{\Session::get('success')}}</p>
  </div>
  @endif

  <div style="padding-left: 300px;">
        @if(session()->has('message'))
    <div class="alert alert-success" style="width: 500px; text-align: center;">
        {{session()->get('admin_name')}} !!!
        {{ session()->get('message') }}
    </div>
@endif
</div>

 <div style="padding-left: 300px;">
        @if(session()->has('msg'))
    <div class="alert alert-danger" style="width: 500px; text-align: center;">
        {{session()->get('admin_name')}} !!!
        {{ session()->get('msg') }}
    </div>
@endif
</div>

        		<form action="{{URL::to('/updateapass')}}" method="post">
        			{{ csrf_field()}}
        			<div class="form-group">
        				<label for="">
        					
        				</label>
        				<input type="hidden" class = "form-control" name="id" value="{{session()->get('id')}}" readonly="readonly">
        			</div>
        			
        			
        			
        			<div class="form-group">
        				<label for="">
        					Current Password
        				</label>
        				<input type="password" class = "form-control" name="password" >
        			</div>
        			<div class="form-group">
        				<label for="">
        				 New Password
        				</label>
        				<input type="password" class = "form-control" name="password1" >
        			</div>

        			<div class="form-group">
        				
        				<button type="submit" class="btn btn-primary">Update</button>
        			</div>
        		</form>
        	</div> 
        </div>
    </div>

@stop