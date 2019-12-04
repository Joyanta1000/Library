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
        		<form action="{{URL::to('/updateai/'.session()->get('id'))}}" method="post">
        			{{ csrf_field()}}
        			<div class="form-group">
        				<label for="">
        					ID
        				</label>
        				<input type="text" class = "form-control" name="id" value="{{session()->get('id')}}" readonly="readonly">
        			</div>
        			<div class="form-group">
        				<label for="">
        					Name
        				</label>
        				<input type="text" class = "form-control" name="admin_name" value="{{session()->get('admin_name')}}">
        			</div>
        			<div class="form-group">
        				<label for="">
        					Email
        				</label>
        				<input type="email" class = "form-control" name="email" value="{{session()->get('email')}}">
        			</div>
        			<div class="form-group">
        				<label for="">
        					Phone-Number
        				</label>
        				<input type="text" class = "form-control" name="phone" value="{{session()->get('phone')}}">
        			</div>
        			<div class="form-group">
        				<label for="">
        					Address
        				</label>
        				<input type="text" class = "form-control" name="address" value="{{session()->get('address')}}">
        			</div>
        			<div class="form-group">
        				<label for="">
        				<!--  Password -->
        				</label>
        				<input type="hidden" class = "form-control" name="password" value="{{session()->get('password')}}">
        			</div>

        			<div class="form-group">
        				
        				<button type="submit" class="btn btn-primary">Update</button>
        			</div>
        		</form>
        	</div> 
        </div>
    </div>

@stop