<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-3.min.css">
	<title>Nerd stuff</title>
</head>
<body class="container">
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
				<a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
		</div>
		<ul class="nav navbar-nav">
				<li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
				<li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
		</ul>
	</nav>
	<h1>I go here</h1>
	<div class="col-lg-8 col-lg-offset-2">

	<br><br>
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<table class="table table-striped">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Nerd Level</th>
		</thead>
		@foreach($nerds as $key => $value)
		<tr>
			<td>{{ $value->name }}</td>
			<td>{{ $value->email }}</td>
			<td>{{ $value->nerd_level }}</td>
			<td><a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id) }}">Show this Nerd</a></td>
			<td><a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Edit this Nerd</a></td>
			<td>
				{{ Form::open(array('url' => 'nerds/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
	</table>
	

								<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
	
	</div>
</body>
</html>