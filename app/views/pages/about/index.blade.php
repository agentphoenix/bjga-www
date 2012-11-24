@layout('template')

@section('content')
	<h1 class="hidden-phone">Welcome to Brian Jacobs Golf</h1>
	<h1 class="visible-phone">Brian Jacobs Golf</h1>

	<p>Welcome to Brian Jacobs Golf where our mission is simple: teach golfers how to take their game to its highest potential to experience greater consistency and have more fun.</p>

	<p>We believe that the true joy for any student of the game comes from the passion to learn more about the subject, the commitment to practice and develop their golf game and the challenge to continually improve their golf and themselves. Make a commitment to yourself to get better and visit our Academy to take your game inside the ropes.</p>

	<div class="row-fluid">
		<div class="span4">
			<div class="well">
				<h3 class="primary visible-desktop">Private Instruction</h3>
				<h3 class="primary visible-tablet">Private Lessons</h3>
				<p>Book a private instruction session or playing lesson at Mill Creek Golf Club with a Brian Jacobs Golf Instructor and start improving your game.</p>
				
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('private') }}" class="btn btn-primary">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('private') }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="well">
				<h3 class="primary">Golf Schools</h3>
				<p>Participate in one of our many golf schools where you'll be given all the tools necessary to take your golf game to the next level and beyond.</p>
				
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('schools') }}" class="btn btn-primary">More Info</a>
					<a href="{{ URL::to_route('contact', array('schools')) }}" class="btn btn-primary">Book Now</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('schools') }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('contact', array('schools')) }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="well">
				<h3 class="primary">Spring Golf Trip</h3>
				<p>Join us for a getaway to Amelia Island Plantation complete with amazing views from a seaside villa and 3 days of championship golf.</p>
				
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('event-amelia-island') }}" class="btn btn-primary">More Info</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('event-amelia-island') }}" class="btn btn-primary btn-block btn-large">More Info</a>
				</div>
			</div>
		</div>
	</div>
@endsection