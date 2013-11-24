<div class="fixed">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
				<h1>{{ link_to('/', 'My Blog') }}</h1>
			</li>
			
			<!-- Mobile Nav Menu -->
			<li class="toggle-topbar menu-icon">
				<a href="#">
					<span>Menu</span>
				</a>
				<ul class="left">
					<li>{{ link_to('posts', 'Blog') }}</li>
					<li>{{ link_to('posts/json', 'JSON Feed', array('target' => '__blank')) }}</li>
				</ul>
			</li>
		</ul>
		
		<!-- Desktop Nav -->
		<section class="top-bar-section">
			<ul class="left">
				<li>{{ link_to('posts', 'Blog') }}</li>
				<li>{{ link_to('posts/json', 'JSON Feed', array('target' => '__blank')) }}</li>
			</ul>
			
			<ul class="right">
				@include('navigationadmin')
				@include('navigationlogin')
			</ul>
		</section>
	</nav>
</div>