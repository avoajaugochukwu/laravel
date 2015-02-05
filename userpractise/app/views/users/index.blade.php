@extends('layouts.master')

@section('header')
	<h1>All our Users</h1>
@stop



{{-- username email password --}}
@section('content')
	<p>{{link_to_route('users.create', 'Create new User')}}</p>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>Username</td>
				<td>Email</td>
				<td>Password</td>
			</tr>
		</thead>


		<tbody>
			@foreach($users as $user)
			<tr>
				<td>		{{$user->username}}		</td>
				<td>		{{$user->email}}		</td>
				<td>		{{$user->password}}		</td>
				<td>
					{{--link_to_route('edit', 'Edit', array($user->id), array('class' => 'btn btn-primary'))--}}
					{{link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-primary'))}}
				</td>
				<td>
					{{Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id)))}}
						
						{{Form::submit('delete', array('class' => 'btn btn-danger'))}}
					{{Form::close()}}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop