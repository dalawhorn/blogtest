<!DOCTYPE html>
<html>
	<head>
		<title>Blog</title>
		<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  		<link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}">
  		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  		<script src="{{ asset('js/vendor/custom.modernizr.js') }}"></script>
	</head>
	<body>
		@include('navigation')
		
		<!-- Main Content -->
		<div class="row first_row">
			<div class="small-12">
				@yield('content')
			</div>
			
		</div>
		
		<!-- Footer  -->
		<div class="row">
			<div class="small-6 small-centered columns footer">
				Copyright &copy; 2013 Daniel Lawhorn
			</div>
		</div>
		
		@section('footerjs')
			<script src="{{ asset('js/vendor/jquery.js') }}"></script>
			<script src="{{ asset('js/foundation.min.js') }}"></script>
			<script>
				$(document).foundation();
			</script>
		@show
	</body>
</html>