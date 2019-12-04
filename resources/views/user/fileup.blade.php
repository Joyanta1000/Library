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
            <a href="{{ URL::to('user/uown')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Change Profile Picture</li>
        </ol>
        <div class="card">
          <div class="col-md-12">
            <form action="{{URL::to('/updateim/'.session()->get('id'))}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
              <div class="form-group">
                <label for="id">
                  
                </label>
                <input type="hidden" class = "form-control" name="id"  readonly="readonly" value="{{session()->get('id')}}">
                <span class="error"></span>
              </div>
                <div class="form-group">
                <label for="name">
                  
                </label>
                <input type="hidden" class = "form-control" name="name"  readonly="readonly">
                <span class="error"></span>
              </div>
              <div class="form-group">
                <label for="image">
                  Image
                </label>
                <input type="file" class = "form-control" name="image">
                <span class="error">{{$errors->first('image')}}</span>
              </div>
             
            
              
              
         
              <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Change</button>
              </div>
            </form>
          </div> 
        </div>
    </div>
@stop
