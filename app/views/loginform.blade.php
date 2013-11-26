@extends('master')

@section('content')
	<div class="row">
		<div class="small-10 columns small-centered">
			<div class="panel">
			
				<h1>Login</h1>
				{{ Form::open(array('url' => 'do-login')) }}
					{{ Form::text('username', null, array('placeholder' => 'Username')) }}
					{{ Form::password('password', array('placeholder' => 'Password')) }}
					{{ Form::submit('Login', array('class' => 'button')) }}
				{{ Form::close() }}
				
				<div>
					Don't have an account? <a href='account/create'>Sign-up here</a>.
				</div>
			</div>
		</div>
	</div>
@stop

