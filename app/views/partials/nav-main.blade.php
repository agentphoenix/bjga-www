<nav class="nav-main visible-desktop">
	<div class="brand"></div>
	
	<ul>
		<li><a href="{{ URL::to_route('home') }}" class="{{ (URI::is('about*') or URI::is('/')) ? 'active' : '' }}">About<div>meet brian jacobs</div></a></li>
		<li><a href="{{ URL::to_route('instruction') }}" class="{{ URI::is('instruction*') ? 'active' : '' }}">Instruction<div>take control of your game</div></a></li>
		<li><a href="{{ URL::to_route('contact', array('general')) }}" class="{{ URI::is('contact*') ? 'active' : '' }}">Contact<div>get in touch</div></a></li>
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
			</ul>
		</div>
	</div>
</div>