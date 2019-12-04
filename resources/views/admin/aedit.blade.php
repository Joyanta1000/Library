@extends('admin.layouts.default')
@section('content')
<!DOCTYPE html>
<style type="text/css">
	.error{
		color:red;
	}
	.success{
		background-color: lightgreen;
		color:white;
	}
</style>
<html lang="en">
<head>
	<title>Admin Info Update </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cs/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('cs/main.css')}}">
<!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">
<div class="error">
	@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <!-- <li>{{$error}}</li> -->
      @endforeach
    </ul>
  </div>
  @endif
  
  @if(\Session::has('success'))
  <div class="success">
    <p>{{\Session::get('success')}}</p>
  </div>
  @endif
			<form class="contact100-form validate-form" method="post" action="{{URL::to('/update/'.$admins->id)}}">
				{{csrf_field()}}
				<span class="contact100-form-title">
					Admin Info Update
				</span>
				<div >
					<span>{{$errors->first('admin_name')}}</span>
				</div>

				<div class="wrap-input100 validate-input" >
					
					<input class="input100" type="text" name="admin_name" placeholder="Name">
					
				</div>
				<div>
					<span>{{$errors->first('email')}}</span>
					</div>

				<div class="wrap-input100 validate-input" >
					
					<input class="input100" type="text" name="email" placeholder="Email">
					
				</div>
				<div>
					<span>{{$errors->first('phone')}}</span>
				</div>

				<div class="wrap-input100 validate-input" >
					
					<input class="input100" type="number" name="phone" placeholder="Phone Number">
					
				</div>
				<div>
					<span>{{$errors->first('address')}}</span>
				</div>

				<div class="wrap-input100 validate-input" >
					
					<input class="input100" type="text" name="address" placeholder="Address">
					
				</div>
				<div>
					<span>{{$errors->first('password')}}</span>
				</div>

				<div class="wrap-input100 validate-input" >
					
					<input class="input100" type="password" name="password" placeholder="password">
					
				</div>
				 <!-- <div class="wrap-input100 validate-input" data-validate = "Please enter your ID"> 
				<select class="input100" type ="text" name="stock"  required="required">
				 <option class="input100"   value="Borrow">Borrow</option>
				 </select>
				 </div> -->
<!-- 
				<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" type="text" name="phone" placeholder="Phone Number">
					<span class="focus-input100"></span>
				</div> -->

				<!-- <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" type="text" name="email" placeholder="email">
					<span class="focus-input100"></span>
				</div> -->

				<!-- <div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea class="input100" name="message" placeholder="Your Message"></textarea>
					<span class="focus-input100"></span>
				</div> -->
                 
				<div class="container-contact100-form-btn">
					
					<button class="contact100-form-btn" type="submit" name="submit">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Register
						</span>
					</button>
				</div>
			
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('j/main.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
@stop