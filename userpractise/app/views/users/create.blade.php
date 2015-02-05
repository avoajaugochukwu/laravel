@extends('layouts.master')
@section('header')
	<h1>Create a new stuff</h1>
@stop

@if(Session::has('FailureMessage'))
	<div class="alert alert-danger">
		<h3>{{Session::get('FailureMessage')}}</h3>
	</div>
@endif

@section('content')
	{{Form::open(array('route' => 'users.store', 'class' => 'well well-small'))}}

		{{ Form::label('username', 'Username:') }}
			{{Form::text('username')}}

		{{ Form::label('email', 'email:') }}
			{{Form::text('email')}}

		{{ Form::label('password', 'password:') }}
			{{Form::text('password')}}
		
		<br>
		{{Form::submit('Create', array('class' => 'btn btn-info'))}}
		{{link_to_route('users.index', 'Cancel', $id = NULL, array('class' => 'btn btn-primary'))}}
	{{Form::close()}}
@stop