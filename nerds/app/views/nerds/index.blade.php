<h1>Home page</h1>
@foreach ($nerds as $nerd)
{{ $nerd->name }} <a href="/nerds/{{$nerd->id }}">view</a>&nbsp;<a href="/nerds/{{$nerd->id}}/edit">edit</a>
	{{ Form::open(array('url' => 'nerds/'. $nerd->id)) }}
		{{ Form::hidden('_method', 'DELETE')}}
		{{ Form::submit('delete') }}
	{{ Form::close() }}
<hr>
@endforeach

<a href="/nerds/create">create</a>