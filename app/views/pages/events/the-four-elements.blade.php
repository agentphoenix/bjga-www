@layout('template')

@section('title')
	The 4 Elements of Putting and Golf Fitness
@endsection

@section('content')
	<h1>The 4 Elements of Putting and Golf Fitness*<br><small>Powered by Brian Jacobs Golf and Power Train Sports Institute</small></h1>

	<p>Get serious about your putting and your golf fitness with this 4 week program during March that'll get you ready to <strong class="primary">storm the course</strong> in 2013. Each week of the program consists of a 60 minute putting clinic with PGA Professional and Eyeline Putting Certfied Instructor Brian Jacobs and two training sessions at the <a href="http://www.powertrainsports.com/" target="_blank">Power Train</a> Sports Institute.</p>

	<p>Join us on on four Saturdays in March (March 9th, March 16th, March 23rd and March 30th) at <strong>12:15pm</strong> for a 60-minute putting program in the TSE Annex. After 4 weeks, you'll find you have more confidence over those 6 foot putts and you'll be ready to <strong class="primary">storm the course</strong> in 2013!</p>

	<p>TSE Annex**<br>
	800 Elmgrove Road<br>
	Rochester, NY 14624</p>

	<div class="hidden-phone">
		<a href="http://maps.google.com/?q=800 Elmgrove Road Rochester, NY 14624" target="_blank" class="btn btn-primary"><span class="map-pin"></span>View in Google Maps</a>
	</div>
	<div class="visible-phone">
		<a href="http://maps.google.com/?q=800 Elmgrove Road Rochester, NY 14624" target="_blank" class="btn btn-primary btn-large btn-block">View in Google Maps</a>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span6">
			<h2>Putting</h2>

			<h2 class="primary">$100 <small>Putting only*</small></h2>

			<div class="hidden-phone">
				<a href="{{ URL::to_route('booking', array('event', 87273)) }}" class="btn btn-primary">Book Now</a>
			</div>

			<div class="visible-phone">
				<a href="{{ URL::to_route('booking', array('event', 87273)) }}" class="btn btn-primary btn-block btn-large">Book Now</a>
			</div>
			<br>

			<p>Practice the right things in the right way and you'll find yourself sinking the putts you need to beat your buddies on the 18th or win your club championship. When it comes to putting, there's no reason it can't be one of the strengths of your game. Eyeline Putting Certified Instructor Brian Jacobs teaches about the most important aspects of putting in this month-long program:</p>

			<dl>
				<dt>Setup</dt>
				<dd>Setup includes the critical elements of alignment of eyes, shoulders and the putter face. It requires us to retrain our eyes to see our aim accurately. Our posture needs to be in balance and consistent each day.</dd>

				<dt>Path</dt>
				<dd>25% of the where your putt rolls is determined by the path the putter travels during the stroke. Train yourself to swing the putter on the target line with good momentum throughout the stroke.</dd>

				<dt>Impact</dt>
				<dd>75% of where the ball rolls is determined by the aim of the putter face when it impacts the ball. It's vital to hit the center of the ball with the sweet spot of the putter. It's also vital that the putter face is square to the target line at impact. If it is, the ball rolls end-over-end and wants to dive into the cup.</dd>

				<dt>Speed</dt>
				<dd>An accelerating stroke that strikes the ball solidly through impact will improve consistency.</dd>
			</dl>
		</div>

		<div class="span6">
			<h2>Fitness</h2>

			<h2 class="primary">$370 <small>Putting and fitness***</small></h2>

			<div class="hidden-phone">
				<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
			</div>

			<div class="visible-phone">
				<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
			</div>
			<br>

			<p>Maybe the most ignored area for any golfer is fitness. While the majority of golf is mental, there are still  physical and athletic components that are required to make the best swing possible, whether it's a driver off the tee or a 6 foot putt. Power Train Sports Institute is committed on making athletes of any sport better through focus on four key areas:</p>

			<dl>
				<dt>Stability</dt>
				<dd>Whenever there's unnecessary movement in your golf swing, you're potentially losing power and distance. It's crucial to maintain stability and balance throughout the golf swing so you can turn on the proper axis and prevent injuries.</dd>

				<dt>Strength</dt>
				<dd>Power! As a golfer strength means creating more leverage in your swing from takeaway to follow-through. That power and leverage are directly correlated to hitting the ball farther and more durability during the season.</dd>

				<dt>Speed</dt>
				<dd>Coupled with stability and strength, speed allows you to hit the ball farther by increase club head speed and ball speed.</dd>

				<dt>Flexibility</dt>
				<dd>One of the most important things in the golf swing is a full turn around the proper axis. With more flexibility, you can make a more effective turn and lay a foundation for better ball striking. Additionally, flexibility prevents injury to keep you healthy and playing all season long.</dd>
			</dl>
		</div>
	</div>

	<p class="muted"><em>* Program is subject to adequate student enrollment.</em></p>

	<p class="muted"><em>** Entrance to the TSE Annex is on the North side of the building before Agape Physical Therapy.</em></p>

	<p class="muted"><em>*** Training sessions and payment are directly with Power Train Sports Institute. All services rendered are based on student/trainer schedule and must be completed on or before March 30th, 2013.</em></p>
@endsection