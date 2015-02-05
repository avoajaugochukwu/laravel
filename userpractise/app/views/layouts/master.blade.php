<html>
	<head>
		<title>My Practice</title>
		<!-- <title>{{-- $title --}}</title> -->
		<link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.css')}}">
	</head>
		<div class="container">
			<div class="row">
				<div class="page-header">

					@yield('header')
				</div>

				<div class="span8 offset2">
				@if(Session::has('GoodMessage'))
					<div class="alert alert-success">
						{{Session::get('GoodMessage')}}
					</div>
				@endif
					@yield('content')
				</div>
			</div>
		</div>
		
</html>