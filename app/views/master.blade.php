<!DOCTYPE html>
<html>
	<head>
		<title>Blog</title>
		<link rel="stylesheet" href="css/normalize.css">
  		<link rel="stylesheet" href="css/foundation.min.css">
  		<link rel="stylesheet" href="css/style.css">
  		<script src="js/vendor/custom.modernizr.js"></script>
	</head>
	<body>
		@include('navigation')
		
		<!-- Main Content -->
		<div class="row">
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
		
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>