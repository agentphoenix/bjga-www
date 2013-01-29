<header class="hidden-phone">
	<div class="row overlay">
		<div class="span5 offset1">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<h1 class="italic">Take your game inside the ropes...</h1>
		</div>
	</div>
	<!--<div class="row overlay hide">
		<div class="span5 offset1">
			<h1>2013 Spring Golf Trip</h1>
			<p>Join us in the exquisite golfer's paradise of the Omni Amelia Island Plantation for a golfing getaway this spring, complete with amazing views from a seaside villa and 3 days of championship golf.</p>
			<p><a href="{{ URL::to_route('event-amelia-island') }}" class="btn btn-large btn-inverse btn-block">More Info</a></p>
		</div>
	</div>-->
	<div class="row overlay hide">
		<div class="span5 offset1">
			<h1>Pin Seeker</h1>
			<p>Sharpen your short game and be the putter you always dreamed of with this brand-new series of group instruction programs focusing on the game from 100 yards and in. Sign up today for one or both of the programs and get a month of free play on Mill Creek's short course!</p>
			<p><a href="{{ URL::to_route('clinics') }}" class="btn btn-large btn-inverse btn-block">More Info</a></p>
		</div>
	</div>
	<div class="row overlay hide">
		<div class="span5 offset1">
			<h1>Winter Lessons at Valle Sports</h1>
			<p>Sign up for indoor lessons this winter starting at $125! Or buy packages of 5, 7 or 12 lessons to hone your golf game while there's snow on the ground.</p>
			<p><a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-large btn-inverse btn-block">Contact Us to Book</a></p>
		</div>
	</div>
</header>

<div class="visible-phone">@if (URI::is('/'))<div class="bjga-logo"></div>@endif</div>