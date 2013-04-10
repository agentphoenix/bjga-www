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
			<div class="span12">
				<div class="well">
					<h2 class="pinseeker">Pin Seeker</h2>

					<p>Sharpen your short game and be the putter you always dreamed of with this brand-new series of group instruction programs from Brian Jacobs Golf focusing exclusively on the game from 100 yards and in. Sign up today for one or both of the programs (only <strong class="primary">$99</strong> per person per program) and get a month of free play on Mill Creek's short course!</p>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('clinics') }}" class="btn btn-primary">More Info</a>
						<a href="{{ URL::to_route('booking', array('event', 77769)) }}" class="btn btn-primary">Book Short Game Now</a>
						<a href="{{ URL::to_route('booking', array('event', 77771)) }}" class="btn btn-primary">Book Putting Now</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('clinics') }}" class="btn btn-primary btn-block btn-large">More Info</a>
						<a href="{{ URL::to_route('booking', array('event', 77769)) }}" class="btn btn-primary btn-block btn-large">Book Short Game</a>
						<a href="{{ URL::to_route('booking', array('event', 77771)) }}" class="btn btn-primary btn-block btn-large">Book Putting</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">
				<div class="well">
					<h2 class="primary">Nike Golf VRS Covert Distance Challenge</h2>

					<p>Come find out how Nike Golf's 2013 line of products stacks up against what you've got in your bag at the <strong class="primary">Nike Golf VRS Covert Distance Challenge</strong> at Mill Creek Golf Club on May 1st.</p>

					<p>In addition to working with Nike Golf reps, you'll also get preferred pricing on all Nike Golf clubs today only! Space is limited, so contact us today to book your spot.</p>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('contact') }}" class="btn btn-primary">Book Now</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('contact') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span6">
				<div class="well">
					<h3 class="primary">Specialized Instruction</h3>

					<p>Each month this summer, we're offering specialized instruction on the different clubs in your bag as well as free club fittings and discounts on Nike Golf equipment.</p>

					<ul>
						<li><strong>May</strong> - Hit It Long, Hit It Straight: You and Your Driver</li>
						<li><strong>June</strong> - Demystifying Your Fairway Wood and Hybrid</li>
						<li><strong>July</strong> - Mastering Your Irons</li>
						<li><strong>August</strong> - Becoming a Short Game Guru</li>
					</ul>
					
					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('event-special') }}" class="btn btn-primary">Learn More</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('event-special') }}" class="btn btn-primary btn-block btn-large">Learn More</a>
					</div>
				</div>
			</div>

			<div class="span6">
				<div class="well">
					<h3 class="primary">Hit It Long, Hit It Straight: You and Your Driver</h3>

					<p>The driver is often an achilles heel for amateurs, but it doesn't have to be. Learn how to hit your driver the right way and make it one of the strengths of your game.</p>

					<p>Book a private instruction session during May and let us know you want to work on your driver. In addition to world-class instruction on how to hit your driver, you'll also receive a free driver fitting as part of your lesson and 10% off the Nike VRS Covert driver all month long!</p>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="visible-tablet">
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
					<h3 class="primary">Specialized Instruction</h3>

					<p>Each month this summer, we're offering specialized instruction on the different clubs in your bag as well as free club fittings and discounts on Nike Golf equipment.</p>

					<ul>
						<li><strong>May</strong> - Hit It Long, Hit It Straight: You and Your Driver</li>
						<li><strong>June</strong> - Demystifying Your Fairway Wood and Hybrid</li>
						<li><strong>July</strong> - Mastering Your Irons</li>
						<li><strong>August</strong> - Becoming a Short Game Guru</li>
					</ul>
					
					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('event-special') }}" class="btn btn-primary">Learn More</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('event-special') }}" class="btn btn-primary btn-block btn-large">Learn More</a>
					</div>
				</div>
			</div>

			<div class="span6">
				<div class="well">
					<h3 class="primary">Hit It Long, Hit It Straight: You and Your Driver</h3>

					<p>The driver is often an achilles heel for amateurs, but it doesn't have to be. Learn how to hit your driver the right way and make it one of the strengths of your game.</p>

					<p>Book a private instruction session during May and let us know you want to work on your driver. In addition to world-class instruction on how to hit your driver, you'll also receive a free driver fitting as part of your lesson and 10% off the Nike VRS Covert driver all month long!</p>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
					</div>
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