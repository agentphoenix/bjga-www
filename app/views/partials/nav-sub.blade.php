<nav class="nav-sub visible-desktop">
	<ul class="social-icons">
		<li><a href="https://www.facebook.com/brianjacobsgolf" target="_blank" class="facebook-icon"></a></li>
		<li><a href="http://twitter.com/BrianJacobsgolf" target="_blank" class="twitter-icon"></a></li>
	</ul>

	@if (URI::is('about/*') or URI::is('/'))
		<ul>
			<li class="{{ URI::is('/') ? 'active' : '' }}"><a href="{{ URL::to_route('home') }}">Home</a><div class="arrow"></div></li>
			<li class="{{ URI::is('about/brian') ? 'active' : '' }}"><a href="{{ URL::to_route('about') }}">Meet Brian Jacobs</a><div class="arrow"></div></li>
			<li class="{{ URI::is('about/relationships') ? 'active' : '' }}"><a href="{{ URL::to_route('relationships') }}">Relationships</a><div class="arrow"></div></li>
			<li class="{{ URI::is('about/testimonials') ? 'active' : '' }}"><a href="{{ URL::to_route('testimonials') }}">Testimonials</a><div class="arrow"></div></li>
			<li><a href="#">Blog</a></li>
			<li class="{{ URI::is('about/contact*') ? 'active' : '' }}"><a href="{{ URL::to_route('contact') }}">Contact</a><div class="arrow"></div></li>
		</ul>
	@elseif (URI::is('instruction/*'))
		<ul>
			<li class="{{ URI::is('instruction/index') ? 'active' : '' }}"><a href="{{ URL::to_route('instruction') }}">Our Philosophy</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/private') ? 'active' : '' }}"><a href="{{ URL::to_route('private') }}">Private Instruction</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/schools') ? 'active' : '' }}"><a href="{{ URL::to_route('schools') }}">1:1 Golf Schools</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/junior-team') ? 'active' : '' }}"><a href="{{ URL::to_route('juniorteam') }}">Junior Team</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/junior-camps') ? 'active' : '' }}"><a href="{{ URL::to_route('juniorcamps') }}">Junior Camps</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/clinics') ? 'active' : '' }}"><a href="{{ URL::to_route('clinics') }}">Clinics</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/booking') ? 'active' : '' }}"><a href="{{ URL::to_route('booking') }}">Book Now</a><div class="arrow"></div></li>
		</ul>
	@endif
</nav>

<div class="visible-phone">
	@if (URI::is('about/*') or URI::is('/'))
		<ul class="nav nav-list">
			<li class="{{ URI::is('/') ? 'active' : '' }}"><a href="{{ URL::to_route('home') }}">Home</a></li>
			<li class="{{ URI::is('about/brian') ? 'active' : '' }}"><a href="{{ URL::to_route('about') }}">Meet Brian Jacobs</a></li>
			<li class="{{ URI::is('about/relationships') ? 'active' : '' }}"><a href="{{ URL::to_route('relationships') }}">Relationships</a></li>
			<li class="{{ URI::is('about/testimonials') ? 'active' : '' }}"><a href="{{ URL::to_route('testimonials') }}">Testimonials</a></li>
			<li><a href="#">Blog</a></li>
			<li class="{{ URI::is('about/contact*') ? 'active' : '' }}"><a href="{{ URL::to_route('contact') }}">Contact</a></li>
		</ul>
	@elseif (URI::is('instruction/*'))
		<ul class="nav nav-list">
			<li class="{{ URI::is('instruction/index') ? 'active' : '' }}"><a href="{{ URL::to_route('instruction') }}">Our Philosophy</a></li>
			<li class="{{ URI::is('instruction/private') ? 'active' : '' }}"><a href="{{ URL::to_route('private') }}">Private Instruction</a></li>
			<li class="{{ URI::is('instruction/schools') ? 'active' : '' }}"><a href="{{ URL::to_route('schools') }}">1:1 Golf Schools</a></li>
			<li class="{{ URI::is('instruction/junior-team') ? 'active' : '' }}"><a href="{{ URL::to_route('juniorteam') }}">Junior Team</a></li>
			<li class="{{ URI::is('instruction/junior-camps') ? 'active' : '' }}"><a href="{{ URL::to_route('juniorcamps') }}">Junior Camps</a></li>
			<li class="{{ URI::is('instruction/clinics') ? 'active' : '' }}"><a href="{{ URL::to_route('clinics') }}">Clinics</a></li>
			<li class="{{ URI::is('instruction/booking') ? 'active' : '' }}"><a href="{{ URL::to_route('booking') }}">Book Now</a></li>
		</ul>
	@endif
</div>