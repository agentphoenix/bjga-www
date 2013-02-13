@layout('template')

@section('title')
	Home
@endsection

@section('content')
	<h1 class="hidden-phone">Welcome to Brian Jacobs Golf</h1>
	<h1 class="visible-phone">Brian Jacobs Golf</h1>

	<p>Welcome to Brian Jacobs Golf where our mission is simple: teach golfers how to take their game to its highest potential to experience greater consistency and have more fun.</p>

	<p>We believe that the true joy for any student of the game comes from the passion to learn more about the subject, the commitment to practice and develop their golf game and the challenge to continually improve their golf and themselves. Make a commitment to yourself to get better and visit our Academy to take your game inside the ropes.</p>

	<div class="hidden-tablet">
		<div class="row-fluid">
			<div class="span4">
				<div class="well">
					<h3 class="primary visible-desktop">Private Instruction</h3>
					<h3 class="primary visible-phone">Private Lessons</h3>
					<p>The golf season is coming. Book a private instruction session or 9-hole playing lesson at Mill Creek Golf Club with a Brian Jacobs Golf Instructor and start improving today.</p>
					
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

			<!--<div class="span4">
				<div class="well">
					<h3 class="primary">Golf Schools</h3>
					<p>Participate in one of our many golf schools where you'll be given the tools necessary to take your golf game to the next level.</p>
					
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
			</div>-->

			<div class="span8">
				<div class="well">
					<h2 class="pinseeker">Pin Seeker</h2>

					<p>Sharpen your short game and be the putter you always dreamed of with this brand-new series of group instruction programs from Brian Jacobs Golf focusing exclusively on the game from 100 yards and in. Sign up today for one or both of the programs (only <strong class="primary">$99</strong> per person per program) and get a month of free play on Mill Creek's short course!</p>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('clinics') }}" class="btn btn-primary">More Info</a>
						<a href="{{ URL::to_route('booking', array('event', 77769)) }}" class="btn btn-primary">Book Short Game Session Now</a>
						<a href="{{ URL::to_route('booking', array('event', 77771)) }}" class="btn btn-primary">Book  Putting Session Now</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('clinics') }}" class="btn btn-primary btn-block btn-large">More Info</a>
						<a href="{{ URL::to_route('booking', array('event', 77769)) }}" class="btn btn-primary btn-block btn-large">Book Short Game Session</a>
						<a href="{{ URL::to_route('booking', array('event', 77771)) }}" class="btn btn-primary btn-block btn-large">Book  Putting Session</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">
				<div class="well">
					<h2 class="stormthecourse">Storm the Course</h2>

					<p>The 2013 golf season is quickly approaching and if you're serious about making 2013 your best golf season yet, take advantage of this 2-month collection of programs, including limited-time special pricing on private instruction from Brian Jacobs Golf, The 4 Elements putting school and more. For only <strong class="primary">$100</strong> per session we can help you <strong>storm the course</strong> in 2013 and take your game inside the ropes.</p>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('event-storm') }}" class="btn btn-primary">More Info</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('event-storm') }}" class="btn btn-primary btn-block btn-large">More Info</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="visible-tablet">
		<div class="row-fluid">
			<div class="span12">
				<div class="well">
					<h3 class="primary visible-desktop">Private Instruction</h3>
					<h3 class="primary visible-tablet">Private Lessons</h3>
					<p>Book a private instruction session or playing lesson at Mill Creek Golf Club with a Brian Jacobs Golf Instructor and start improving today.</p>

					<a href="{{ URL::to_route('private') }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">
				<div class="well">
					<h2 class="pinseeker">Pin Seeker</h2>

					<p>Sharpen your short game and be the putter you always dreamed of with this brand-new series of group instruction programs focusing on the game from 100 yards and in, exclusively from Brian Jacobs Golf. Sign up today for one or both of the programs (only <strong class="primary">$99</strong> per person per program) and get a month of free play on Mill Creek's short course!</p>

					<a href="{{ URL::to_route('clinics') }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking', array('event', 77769)) }}" class="btn btn-primary btn-block btn-large">Book Short Game Session</a>
					<a href="{{ URL::to_route('booking', array('event', 77771)) }}" class="btn btn-primary btn-block btn-large">Book  Putting Session</a>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">
				<div class="well">
					<h2 class="stormthecourse">Storm the Course</h2>

					<p>The 2013 golf season is quickly approaching and if you're serious about making 2013 your best golf season yet, take advantage of this 2-month collection of programs, including limited-time special pricing on private instruction from Brian Jacobs Golf, The 4 Elements putting school and more. For only <strong class="primary">$100</strong> per session we can help you <strong>storm the course</strong> in 2013 and take your game inside the ropes.</p>

					<a href="{{ URL::to_route('event-storm') }}" class="btn btn-primary btn-block btn-large">More Info</a>
				</div>
			</div>
		</div>
	</div>

	<?php if ($eyelinePressRelease === true): ?>
		<h3>Brian Jacobs and Eyeline Golf</h3>

		<a href="http://www.eyelinegolf.com/" target="_blank" class="pull-right"><img src="{{ URL::to_asset('img/eyeline.png') }}" alt="Eyeline Golf"></a>

		<p><a href="http://www.eyelinegolf.com/" target="_blank">Eyeline Golf</a> has joined Brian Jacobs Golf as the official provider to the Brian Jacobs Golf Academy of short game training aids. Since 2002, Eyeline Golf products have been helping golfers unlock their potential in addition have been the #1 Training aid company on the Pro Tours (247 Tour Players chose EyeLine in 2011 - PGA, LPGA, Nationwide). Let Brian Jacobs Golf Academy and Eyeline Golf unlock <em>your</em> potential and take your game inside the ropes!</p>
	<?php endif;?>

	<?php if ($pressRelease === true): ?>
		<h3>Brian Jacobs and Power Train Sports Rochester</h3>

		<a href="http://www.powertrainsports.com/" target="_blank" class="pull-right"><img src="{{ URL::to_asset('img/powertrain.png') }}" alt="Power Train Sports Institute"></a>

		<p>The Brian Jacobs Golf Academy is proud to introduce <a href="http://www.powertrainsports.com/" target="_blank">Power Train Sports Rochester</a> as our official Strength and Conditioning Program. Brian Jacobs' legacy within the golf community paired with the strength and conditioning knowledge of Power Train Sports is an elite tandem for adults and juniors looking to take their golf game to the next level.</p>
	<?php endif;?>
@endsection