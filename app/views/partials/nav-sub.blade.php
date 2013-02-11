<nav class="nav-sub hidden-phone">
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
			<li><a href="http://blog.brianjacobsgolf.com">Blog</a></li>
			<li><a href="http://blog.brianjacobsgolf.com/?cat=2">Videos</a></li>
			<li><a href="{{ URL::to_route('contact', array('general')) }}">Contact</a></li>
		</ul>
	@elseif (URI::is('instruction/*'))
		<ul>
			<li class="{{ URI::is('instruction/index') ? 'active' : '' }}"><a href="{{ URL::to_route('instruction') }}"><span class="hidden-tablet">Our</span> Philosophy</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/private') ? 'active' : '' }}"><a href="{{ URL::to_route('private') }}"><span class="hidden-tablet">Private Instruction</span><span class="hidden-desktop">Lessons</span></a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/schools') ? 'active' : '' }}"><a href="{{ URL::to_route('schools') }}">Golf Schools</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/junior-team') ? 'active' : '' }}"><a href="{{ URL::to_route('juniorteam') }}">Junior Team</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/junior-camps') ? 'active' : '' }}"><a href="{{ URL::to_route('juniorcamps') }}">Junior Camps</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/linksters') ? 'active' : '' }}"><a href="{{ URL::to_route('linksters') }}">Linksters</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/clinics') ? 'active' : '' }}"><a href="{{ URL::to_route('clinics') }}">Clinics</a><div class="arrow"></div></li>
			<li class="{{ URI::is('instruction/booking') ? 'active' : '' }}"><a href="{{ URL::to_route('booking') }}">Book <span class="hidden-tablet">Now</span></a><div class="arrow"></div></li>
		</ul>
	@elseif (URI::is('contact/*'))
		<ul>
			<li class="{{ URI::is('contact/general') ? 'active' : '' }}"><a href="{{ URL::to_route('contact', array('general')) }}">General</a><div class="arrow"></div></li>
			<li class="{{ URI::is('contact/schools*') ? 'active' : '' }}"><a href="{{ URL::to_route('contact', array('schools')) }}">Golf Schools</a><div class="arrow"></div></li>
			<li class="{{ URI::is('contact/clinics') ? 'active' : '' }}"><a href="{{ URL::to_route('contact', array('clinics')) }}">Golf Clinics</a><div class="arrow"></div></li>
			<li class="{{ URI::is('contact/advocare') ? 'active' : '' }}"><a href="{{ URL::to_route('contact', array('advocare')) }}">Advocare</a><div class="arrow"></div></li>
			<li class="{{ URI::is('contact/eyeline') ? 'active' : '' }}"><a href="{{ URL::to_route('contact', array('eyeline')) }}">Eyeline Golf</a><div class="arrow"></div></li>
		</ul>
	@elseif (URI::is('event/*'))
		<ul>
			<li class="{{ URI::is('event/amelia-island') ? 'active' : '' }}"><a href="{{ URL::to_route('event-amelia-island') }}">Amelia Island</a><div class="arrow"></div></li>
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
			<li><a href="http://blog.brianjacobsgolf.com">Blog</a></li>
			<li><a href="http://blog.brianjacobsgolf.com/?cat=2">Videos</a></li>
			<li class="{{ URI::is('about/contact*') ? 'active' : '' }}"><a href="{{ URL::to_route('contact') }}">Contact</a></li>
		</ul>
	@elseif (URI::is('instruction/*'))
		<ul class="nav nav-list">
			<li class="{{ URI::is('instruction/index') ? 'active' : '' }}"><a href="{{ URL::to_route('instruction') }}">Our Philosophy</a></li>
			<li class="{{ URI::is('instruction/private') ? 'active' : '' }}"><a href="{{ URL::to_route('private') }}">Private Instruction</a></li>
			<li class="{{ URI::is('instruction/schools') ? 'active' : '' }}"><a href="{{ URL::to_route('schools') }}">Golf Schools</a></li>
			<li class="{{ URI::is('instruction/junior-team') ? 'active' : '' }}"><a href="{{ URL::to_route('juniorteam') }}">Junior Team</a></li>
			<li class="{{ URI::is('instruction/junior-camps') ? 'active' : '' }}"><a href="{{ URL::to_route('juniorcamps') }}">Junior Camps</a></li>
			<li class="{{ URI::is('instruction/linksters') ? 'active' : '' }}"><a href="{{ URL::to_route('linksters') }}">Linksters</a></li>
			<li class="{{ URI::is('instruction/clinics') ? 'active' : '' }}"><a href="{{ URL::to_route('clinics') }}">Clinics</a></li>
			<li class="{{ URI::is('instruction/booking') ? 'active' : '' }}"><a href="{{ URL::to_route('booking') }}">Book Now</a></li>
		</ul>
	@elseif (URI::is('contact/*'))
		<ul class="nav nav-list">
			<li class="{{ URI::is('contact/general') ? 'active' : '' }}"><a href="{{ URL::to_route('contact', array('general')) }}">General</a></li>
			<li class="{{ URI::is('contact/schools*') ? 'active' : '' }}"><a href="{{ URL::to_route('contact', array('schools')) }}">Golf Schools</a></li>
			<li class="{{ URI::is('contact/clinics') ? 'active' : '' }}"><a href="{{ URL::to_route('contact', array('clinics')) }}">Golf Clinics</a></li>
			<li class="{{ URI::is('contact/advocare') ? 'active' : '' }}"><a href="{{ URL::to_route('contact', array('advocare')) }}">Advocare</a></li>
			<li class="{{ URI::is('contact/eyeline') ? 'active' : '' }}"><a href="{{ URL::to_route('contact', array('eyeline')) }}">Eyeline Golf</a></li>
		</ul>
	@elseif (URI::is('event/*'))
		<ul class="nav nav-list">
			<li class="{{ URI::is('event/amelia-island') ? 'active' : '' }}"><a href="{{ URL::to_route('event-amelia-island') }}">Amelia Island</a></li>
		</ul>
	@endif
</div>