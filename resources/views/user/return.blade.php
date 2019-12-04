
@extends('user.layouts.default')
@section('content') 

<style type="text/css">
  .error{
    color:red;
  }
</style>
@if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul style="background-color: lightpink;">
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
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ URL::to('/user/uown')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Return Books</li>
        </ol>

<div style="padding-left: 300px;">
    @if(session()->has('message'))
    <div class="alert alert-success" style="width: 500px; text-align: center;">
      {{session()->get('user_name')}} !!!
        {{ session()->get('message') }}
    </div>
@endif
</div>
<div style="padding-left: 300px;">
    @if(session()->has('msg'))
    <div class="alert alert-danger" style="width: 500px; text-align: center;">
      {{session()->get('user_name')}} !!!
        {{ session()->get('msg') }}
    </div>
@endif
</div>
        
        <div class="card">
          <div class="col-md-12">
            <form action="{{URL::to('/updatebb')}}" method="post">
              {{ csrf_field()}}
              <div class="form-group">
                <label for="">
                  ISBN
                </label>
                <input type="text" class = "form-control" name="id">
                <span class="error">{{$errors->first('id')}}</span>
              </div>
              <div class="form-group">
                <label for="">
                  
                </label>
                <input type="hidden" class = "form-control" name="user_email" value="{{session()->get('user_email')}}" readonly="readonly">
                <span class="error">{{$errors->first('user_email')}}</span>
              </div>
 <div class="form-group">
                <label for="">
              
                </label>
                <input type="hidden" class = "form-control" name="uid" value="{{session()->get('id')}}" readonly="readonly">
                <span class="error"></span>
              </div>
         <div class="form-group">
                <label for="">
                  
                </label>
                <input type="hidden" class = "form-control" name="stock" value="Returned & available" style="color:red;" readonly="readonly">
                <span class="error">{{$errors->first('stock')}}</span>
              </div>





              <div class="form-group">
                <label for="">
                  
                </label>
                <input type="hidden" class = "form-control" name="rtime">
                <span class="error">{{$errors->first('rtime')}}</span>
              </div>
             
              <div class="form-group">
                <label for="">
                  
                </label>
                <input type="hidden" class = "form-control" name="s" value="Returning">
                <span class="error"></span>
              </div>
              
              <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Return</button>
              </div>
            </form>
          </div> 
        </div>
    </div>
@stop