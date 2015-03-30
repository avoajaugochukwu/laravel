<h1>Edit Page</h1>
{{ HTML::ul($errors->all()) }}
{{ Form::model($nerd, array('route' => array('nerds.update', $nerd->id), 'method' => 'PUT')) }}
	{{ Form::text('name', Input::old('name')) }}
	<hr>
	{{ Form::email('email', Input::old('email')) }}
	<hr>
	{{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) }}
	<hr>
	{{ Form::submit('edit') }}
{{ Form::close() }}
