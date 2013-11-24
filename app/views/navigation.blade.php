<div class="fixed">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
				<h1><a href="#">My Blog</a></h1>
			</li>
			
			<!-- Mobile Nav Menu -->
			<li class="toggle-topbar menu-icon">
				<a href="#">
					<span>Menu</span>
				</a>
				<ul class="left">
					<li><a href="#">Link1</a></li>
					<li><a href="#">Link2</a></li>
				</ul>
			</li>
		</ul>
		
		<!-- Desktop Nav -->
		<section class="top-bar-section">
			<ul class="left">
				<li><a href="#">Link1</a></li>
				<li><a href="#">Link2</a></li>
			</ul>
			
			<ul class="right">
				@include('navigationadmin')
				@include('navigationlogin')
			</ul>
		</section>
	</nav>
</div>