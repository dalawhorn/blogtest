@extends('master')

@section('content')
	<h1>Login</h1>
	{{ Form::open(array('url' => 'do-login')) }}
		{{ Form::text('username', null, array('placeholder' => 'Username')) }}
		{{ Form::password('password', array('placeholder' => 'Password')) }}
		{{ Form::submit('Login', array('class' => 'button')) }}
	{{ Form::close() }}
	
	<div>
		Don't have an account? <a href='account/create'>Sign-up here</a>.
	</div>
@stop

