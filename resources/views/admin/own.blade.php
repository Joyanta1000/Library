@extends('admin.layouts.default')
@section('content')
<body>
	<!-- <p>{{session()->get('id')}}
	 </p>  -->
	 <p style="background-color: lightpink; text-align: center; font-size: 50px;">
	 	<div style="padding-left: 300px;">
	 	@if(session()->has('message'))
    <div class="alert alert-success" style="width: 500px; text-align: center;">
    	{{session()->get('admin_name')}} !!!
        {{ session()->get('message') }}
    </div>
@endif
</div>

<div style="padding-left: 100px;">
<br>
	<p style="font-size: 100px;">&#9827;</p> <br> 
<label> Your Name : {{session()->get('admin_name')}}</label><br>
<label> Your Email : {{session()->get('email')}}</label><br>
<label> Your Phone-Number : {{session()->get('phone')}}</label><br>
<label> Your Address : {{session()->get('address')}}</label>
</div>

	 </p>


	  <!-- <p>{{session()->get('phone')}}</p> -->
</body>

@stop