@layout ('template')

@section('title')
	Winter Private Instruction
@endsection

@section('content')
	<h1>Winter Private Instruction</h1>

	<p>Though the weather outside might be frightful, you can still make good use of the winter months by booking indoor lessons with a Brian Jacobs Golf instructor. Whether you're just getting started and want to be ready to go for the spring or you're an avid golfer looking to shave a few strokes off, we have the tools and resources to customize a program that fits your needs and will empower you to take your game to the next level.</p>

	<p>Email us today to book your private instruction session and take your game to a higher level!</p>

	<div class="row-fluid">
		<div class="span3">
			<div class="well">
				<h3 class="primary">60 Minute Session</h3>
				<p>60 minutes of private instruction with a Brian Jacobs Golf Instructor</p>
				<h3>$125</h3>
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a>
				</div>
				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a>
				</div>
			</div>
		</div>

		<div class="span3">
			<div class="well">
				<h3 class="primary">5 Session Bundle</h3>
				<p>5 private instruction sessions with a Brian Jacobs Golf Instructor</p>
				<h3>$125</h3>
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a>
				</div>
				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a>
				</div>
			</div>
		</div>

		<div class="span3">
			<div class="well">
				<h3 class="primary">7 Session Bundle</h3>
				<p>7 private instruction sessions with a Brian Jacobs Golf Instructor</p>
				<h3>$125</h3>
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a>
				</div>
				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a>
				</div>
			</div>
		</div>

		<div class="span3">
			<div class="well">
				<h3 class="primary">12 Session Bundle</h3>
				<p>12 private instruction sessions with a Brian Jacobs Golf Instructor</p>
				<h3>$125</h3>
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
@endsection