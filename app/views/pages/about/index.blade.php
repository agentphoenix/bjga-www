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

	<!--<div class="hidden-tablet">
		<div class="row-fluid">
			<div class="span12">
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
			<div class="span6">
				<div class="well">
					<h3 class="primary">Get Your Ticket</h3>

					<p>This summer, get in to Brian Jacobs Golf and focus on every aspect of your game. Each month this summer, we're offering specialized instruction on the different clubs in your bag as well as free club fittings and discounts on Nike Golf equipment.</p>

					<ul>
						<li><strong>May</strong> - Hit It Long, Hit It Straight: You and Your Driver</li>
						<li><strong>June</strong> - Demystifying Your Fairway Wood and Hybrid</li>
						<li><strong>July</strong> - Mastering Your Irons</li>
						<li><strong>August</strong> - Becoming a Short Game Guru</li>
					</ul>
					
					<p>When you take a lesson focused on these clubs during the appropriate months, you'll get a ticket. Collect all 4 tickets and you'll get a free lesson during September. Collect 3 and enjoy a full day of free play on the Mill Creek Short Course during September. Collect 2 and enjoy a free round on the Mill Creek Short Course during September.</p>
				</div>
			</div>

			<div class="span6">
				<div class="well">
					<h3 class="primary">Hit It Long, Hit It Straight: You and Your Driver</h3>

					<p>The driver is often an achilles heel for amateurs, but it doesn't have to be. Learn how to hit your driver the right way and make it one of the strengths of your game. You'll be sitting in the fairway instead of searching for your ball in the rough, or worse.</p>

					<p>Book a private instruction session during May and let us know you want to work on your driver, in addition to world-class instruction on how to hit your driver, you'll also receive a free driver fitting with your lesson and 10% off Nike drivers throughout the entire month!</p>

					<div style="height:63px;"></div>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>-->

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

	<?php foreach ($announcements as $a): ?>
		<?php if ($now >= $a['start'] and $now < $a['end']): ?>
			<h3>{{ $a['title'] }}</h3>

			<?php if (isset($a['image'])): ?>
				<a href="{{ $a['link'] }}" target="_blank" class="pull-right"><img src="{{ URL::to_asset($a['image']) }}" alt=""></a>
			<?php endif;?>

			{{ $a['content'] }}
		<?php endif;?>
	<?php endforeach;?>
@endsection