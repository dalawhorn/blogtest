@if(Auth::check())
	<li>{{ link_to('logout', 'Logout '.Auth::user()->name) }}</li>
@else
	<li>{{ link_to('login', 'Login') }}</li>
@endif
