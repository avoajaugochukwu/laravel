<h1>Create Page</h1>
<hr>
{{HTML::ul($errors->all())}}
{{ Form::open(array('url' => 'nerds')) }}

		{{ Form::text('name', Input::old('name')) }}
		<hr>
		{{ Form::email('email', Input::old('email')) }}
		<hr>
		{{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) }}
		<hr>
		{{ Form::submit('create') }}

{{ Form::close() }}