@layout('template')

@section('title')
	Putt For Dough
@endsection

@section('content')
	<h1>Putt For Dough</h1>

	<p>Kick off the 2013 season on Sunday May 5th from 12pm until 2pm at Mill Creek Golf Club with the final <strong class="primary">Storm the Course</strong> event of the year. Together with Eyeline Golf, we'll show you how you can lower your scores with a more consistent short game and putting stroke.</p>

	<div class="btn-group hidden-phone">
		<a href="{{ URL::to_route('booking', array('event', 97674)) }}" class="btn btn-primary">Book Now</a>
	</div>

	<div class="visible-phone">
		<a href="{{ URL::to_route('booking', array('event', 97674)) }}" class="btn btn-primary btn-block btn-large">Book Now</a>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span6">
			<h3>Learn</h3>

			<p>Brian Jacobs Golf is the only place where you'll find the world-class Eyeline Golf training aids. You'll learn to putt and practice the right way with a free putting clinic from Brian Jacobs as well as a Q-and-A session afterwards.</p>
		</div>

		<div class="span6">
			<h3>Preview</h3>

			<p>Get a sneak peak at our exclusive <a href="{{ URL::to_route('clinics') }}">Pin Seeker</a> programs running at the end of May and throughout June. You'll learn about proper set up, path, impact and speed with your putting through invaluable Eyeline Golf training aids.</p>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<h3>Contests</h3>

			<p>Join in on the fun with some putting contests with $50 gift certificates to Brian Jacobs Golf going to the winners. Contests include:</p>

			<ul>
				<li>3 foot putts made in a row left-handed</li>
				<li>3 foot putts made in a row right-handed</li>
				<li>3 foot putts made in a row two-handed</li>
				<li>Closest to the hole - 20 feet</li>
				<li>Closest to the hole - "cross country"</li>
			</ul>
		</div>

		<div class="span6">
			<h3>Take It to the Course</h3>

			<p>Throughout the day we'll also be offering discounted golf on the Mill Creek Short Course so you can take what you've learned and put it into practice. Take this opportunity to focus on an often-neglected area of golf and make it one of your strengths this season!</p>
		</div>
	</div>
@endsection