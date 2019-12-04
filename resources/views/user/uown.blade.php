@extends('user.layouts.default')
@section('content')
<body>
	<!-- <p>{{session()->get('id')}}
	 </p>  -->


	 <p style="background-color: white; text-align: left; font-size: 20px; padding-left: 50px;">
	 </br>
	 	</br>
<div style="padding-left: 300px;">
	 	@if(session()->has('message'))
    <div class="alert alert-success" style="width: 500px; text-align: center;">
    	{{session()->get('user_name')}} !!!
        {{ session()->get('message') }}
    </div>
@endif
</div>
	<!-- @foreach($user as $users)
{{$users->title}}
<img src="{{asset($users->name)}}"  width="300" height="300">
@endforeach -->
<div style="padding-left: 100px;">
<img src="{{asset(session()->get('name'))}}"  width="200" height="200"><br> <br> 
<label> Your Name : {{session()->get('user_name')}}</label><br>
<label> Your Email : {{session()->get('user_email')}}</label><br>
<label> Your Phone-Number : {{session()->get('phone')}}</label><br>
<label> Your Address : {{session()->get('address')}}</label>
</div>

	 </p>
	 
	 
	  <!-- <p>{{session()->get('phone')}}</p> -->
</body>

@stop