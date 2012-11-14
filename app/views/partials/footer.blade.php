<footer class="visible-desktop">
	<div class="row">
		<div class="span8">
			<div class="inner">
				<h1>Brian Jacobs Golf Academy at Mill Creek Golf Club</h1>
				
				<p>A 23-acre practice center at Mill Creek Golf Club accommodates all levels of golfers serious about their game. The bent grass driving range has over 400 yards of hitting area with six target greens and the short game practice area includes three separate greens for pitching/chipping, putting and bunker play.</p>
				
				128 Cedars Avenue<br>
				Churchville, NY 14428<br>
				(585) 889-4110
			</div>
		</div>
		
		<div class="span2">
			<h1>About</h1>
			
			<ul class="unstyled">
				<li><a href="{{ URL::to_route('home') }}">Home</a></li>
				<li><a href="{{ URL::to_route('about') }}">Meet Brian<span class="visible-desktop"> Jacobs</span></a></li>
				<li><a href="{{ URL::to_route('relationships') }}">Relationships</a></li>
				<li><a href="{{ URL::to_route('testimonials') }}">Testimonials</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="{{ URL::to_route('contact') }}">Contact</a></li>
			</ul>
		</div>
		<div class="span2">
			<h1>Instruction</h1>
			
			<ul class="unstyled">
				<li><a href="{{ URL::to_route('instruction') }}">Our Philosophy</a></li>
				<li><a href="{{ URL::to_route('private') }}">Private Instruction</a></li>
				<li><a href="{{ URL::to_route('schools') }}">1:1 Golf Schools</a></li>
				<li><a href="{{ URL::to_route('juniorteam') }}">Junior Team</a></li>
				<li><a href="{{ URL::to_route('juniorcamps') }}">Junior Camps</a></li>
				<li><a href="{{ URL::to_route('clinics') }}">Clinics</a></li>
				<li><a href="{{ URL::to_route('booking') }}">Book Now</a></li>
			</ul>
		</div>
	</div>
</footer>