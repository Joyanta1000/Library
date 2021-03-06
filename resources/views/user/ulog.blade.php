<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Users - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body class="bg-dark" >

  <div class="container">
    <div class="card card-login mx-auto mt-5" >
      <div class="card-header">Users Login</div>
      <div class="card-body">

  @if(session()->has('message'))
    <div class="alert alert-danger" style=" text-align: center;">
      
        {{ session()->get('message') }}
    </div>
@endif

 @if(session()->has('msg'))
    <div class="alert alert-danger" style=" text-align: center;">
      
        {{ session()->get('msg') }}
    </div>
@endif

        <form method="post" action="{{URL::to('/ulogin')}}">
          {{csrf_field()}}
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" name="user_email" autofocus="autofocus" value="{{old('user_email')}}">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div style="font-size: 50px; text-align: center;"> &#9824;</div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
         
<div class="form-group">
            <div class="form-label-group">
              <input type="hidden" id="inputPassword" name="approval" class="form-control"  value="Approved">
              <label for="inputPassword"></label>
            </div>
          </div>

          <button class="btn btn-primary" type="submit">Login</button>

          <br>
          <br>

          <a style="color: red;" class="dropdown-item" href="{{ URL::to('/user/ureg')}}">&#174; Have'nt you a account? please register</a>
          <a style="color: red;" class="dropdown-item" href="{{ URL::to('/forgotpass')}}">&#174; Forgot password?</a>

<br>

         

        </form>
       
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

</body>

</html>
