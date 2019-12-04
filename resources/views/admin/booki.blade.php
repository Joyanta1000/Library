
@extends('admin.layouts.default')
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
            <a href="{{ URL::to('/admin/own')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Books Entry</li>
        </ol>
        <div class="card">
          <div class="col-md-12">
            <form action="{{URL::to('/storeb')}}" method="post">
              {{ csrf_field()}}
              <div class="form-group">
                <label for="">
                  ISBN
                </label>
                <input type="text" class = "form-control" name="id" value="{{old('id')}}">
                <span class="error">{{$errors->first('id')}}</span>
              </div>
              <div class="form-group">
                <label for="">
                  Title
                </label>
                <input type="text" class = "form-control" name="ttl" value="{{old('ttl')}}">
                <span class="error">{{$errors->first('ttl')}}</span>
              </div>
              <div class="form-group">
                <label for="">
                  Author
                </label>
                <input type="text" class = "form-control" name="author" value="{{old('author')}}">
                <span class="error">{{$errors->first('author')}}</span>
              </div>
              <div class="form-group">
                <label for="">
                  Category
                </label>
                <input type="text" class = "form-control" name="category" value="{{old('category')}}">
                <span class="error">{{$errors->first('category')}}</span>
              </div>
              <div class="form-group">
                <label for="">
                  Edition
                </label>
                <input type="text" class = "form-control" name="edition" value="{{old('edition')}}">
                <span class="error">{{$errors->first('edition')}}</span>
              </div>
              <div class="form-group">
                <label for="">
                  Price
                </label>
                <input type="text" class = "form-control" name="price" value="{{old('price')}}">
                <span class="error">{{$errors->first('price')}}</span>
              </div>
               <div  class="form-group">
<select type ="hidden" name="stock" style=" background-color:transparent;  font-family: 20px; opacity: .8em; width: 420px;" required="required">
  
   
    <option style="background-color: black;"  value="Available">Available</option>
   
</select>
</div>
              <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div> 
        </div>
    </div>
@stop