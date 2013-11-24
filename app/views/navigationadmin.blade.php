@if(Auth::check() && (Auth::user()->type == 'admin' || Auth::user()->type == 'author'))
	<li>{{ link_to('admin/view-posts', 'Admin') }}</li>
	<li class='divider'></li>
@endif
