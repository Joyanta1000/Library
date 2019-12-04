
<!DOCTYPE html>
<html>
<style type="text/css">
ul{
  background-color: lightpink;
}
input{
  background-color: white;
  font-size: 30px;
}
  li{
    
    color:red;
    font-size: 20px;
  }
  p{
    margin-top: 20px;
    background-color: lightgreen;
    font-family: 50px;
    text-align: center;
  }
  .error{
     color:red;
    font-size: 20px;
  }
</style>
<head>
@include('includes.link')
</head>
<!-- <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
<div class="mi">
<div class="wrapper">
  <h1 style="text-align: center;" >Update The Book List</h1>
  <p></p>
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
  <form class="form" method="post" action="{{URL::to('/update/'.$libraries->id)}}">
    {{csrf_field()}}
    <div>
    <input type="text" name="id" readonly="readonly" value="{{$libraries->id}}"></div>
    <span class="error">{{$errors->first('id')}}</span>

    <div>
    <input type="text" name="ttl" value="{{$libraries->ttl}}">
    <span class="error">{{$errors->first('ttl')}}</span>
     </div>
     <div>
     <input type="text" name="author" value="{{$libraries->author}}">
     <span class="error">{{$errors->first('author')}}</span>
</div>
<div>
     <input type="text" name="category" value="{{$libraries->category}}">
     <span class="error">{{$errors->first('category')}}</span>
</div>
<div>
     <input type="text" name="edition" value="{{$libraries->edition}}">
     <span class="error">{{$errors->first('edition')}}</span>
</div>
<div>
     <input type="text" name="price" value="{{$libraries->price}}" ></div>
     <span class="error">{{$errors->first('price')}}</span>
    
<br><br>

    <input type="submit" class="submit" value="Update">
  </form>
</div>
</div>
<p class="optimize">
 
</p>
</html>