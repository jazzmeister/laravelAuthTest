<!DOCTYPE html>
<html>
	<head>
		<title>Authentication in Laravel</title>
	</head>
	<body>

		@if(Session::has('global'))
			<p>{{ Session::get('global') }}</p>
		@endif

		@include('layout.navigation')
		@yield('content')
	</body>
</html>