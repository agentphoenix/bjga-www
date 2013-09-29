@layout('template')

@section('title')
	Offseason Performance Series
@endsection

@section('content')
	<h1>Offseason Performance Series</h1>
	
	<p>It has been studied by a variety of golf experts and reported that regular instruction and consistent practice improve play! Why not let Brian Jacobs Golf help you take your game inside the ropes? Even in the off season it is important to think, learn and play golf.</p>

	<p>A performance series of lessons is just what you need to hit better drives, hit the ball closer to the hole with your irons and wedges and improve your putting!</p>

	<p>Wouldn't it be great to never lose your edge? Just stay in "golf shape"? Change some errors that you have so you can play consistently in the spring rather than taking the entire season to improve?</p>

	<p>Performance Series will be available <strong class="primary">November 4th 2013</strong> through <strong class="primary">March 31st 2014</strong>. All services will be performed at Valle Sports on Ridge Road West.</p>

	<p>Each bundle will include:</p>

	<ul>
		<li>1 60 minute lesson with PGA Director of Instruction Brian Jacobs*</li>
		<li>3 60 minute practice sessions per month*</li>
	</ul>

	<div class="row-fluid">
		<div class="span4">
			<div class="well">
				<h3 class="primary">1 Month Committment</h3>
				<h3>$299 <small>per month</small></h3>
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a>
				</div>
				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="well">
				<h3 class="primary">3 Month Committment</h3>
				<h3>$279 <small>per month</small></h3>
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a>
				</div>
				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="well">
				<h3 class="primary">6 Month Committment</h3>
				<h3>$259 <small>per month</small></h3>
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a>
				</div>
				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a>
				</div>
			</div>
		</div>
	</div>

	<h3>Valle Sports</h3>

	<p>With 15,000 square feet of space, Valle Sports is Rochester's premier baseball and softball training facility. In addition, Valle offers an 18 hole golf simulator for a round of golf, private lessons or a virtual driving range. Brian Jacobs Golf has a partnership with Valle to offer a facility for private instruction during the winter months.</p>

	<p>4659 Ridge Road West<br>
	Spencerport, NY 14559<br>
	(585) 349-7278</p>

	<div class="hidden-phone">
		<a href="http://maps.google.com/?q=4659 Ridge Road West Spencerport, NY 14559" target="_blank" class="btn btn-primary"><span class="map-pin"></span>View in Google Maps</a>
	</div>
	<div class="visible-phone">
		<a href="http://maps.google.com/?q=4659 Ridge Road West Spencerport, NY 14559" target="_blank" class="btn btn-primary btn-large btn-block">View in Google Maps</a>
	</div>

	<br>
	<p class="muted"><span class="money"></span>Payment is expected at time of service. Cash, personal check or credit card are all acceptable forms of payment. Please <a href="{{ URL::to_route('contact', array('general')) }}">contact us</a> if you have any questions about this.</p>

	<p class="muted">*Each student will have reserved the same lesson and practice day and time each month.</p>
@endsection