@extends('admin.layouts.default')
@section('content')
<body>
	 @foreach($admins as $a)
	<p>
Hey
		{{ $a->email }}
		{{ $a->admin_name }}</p>
	@endforeach
</body>

@stop