<nav class="nav-main hidden-phone">
	<div class="brand"></div>
	
	<ul>
		<li><a href="{{ URL::to_route('home') }}" class="{{ (URI::is('about*') or URI::is('/')) ? 'active' : '' }}">About Us</a></li>
		<li><a href="{{ URL::to_route('instruction') }}" class="{{ URI::is('instruction*') ? 'active' : '' }}">Instruction</a></li>
		<li><a href="{{ URL::to_route('contact', array('general')) }}" class="{{ URI::is('contact*') ? 'active' : '' }}">Contact</a></li>
		<li><a href="{{ URL::to_route('booking') }}">Book Now</a></li>
	</ul>
</nav>

<div class="navbar visible-phone">
	<div class="navbar-inner">
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>

		<a href="{{ URL::to_route('home') }}" class="brand"></a>

		<div class="nav-collapse collapse">
			<ul class="nav">
				<li><a href="{{ URL::to_route('home') }}">About</a></li>
				<li><a href="{{ URL::to_route('instruction') }}">Instruction</a></li>
				<li><a href="{{ URL::to_route('contact') }}">Contact</a></li>
				<li><a href="{{ URL::to_route('booking') }}">Book Now</a></li>
			</ul>
		</div>
	</div>
</div>