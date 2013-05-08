@layout('template')

@section('title')
	Home
@endsection

@section('content')
	<h1 class="hidden-phone">Welcome to Brian Jacobs Golf</h1>
	<h1 class="visible-phone">Brian Jacobs Golf</h1>

	<p>Welcome to Brian Jacobs Golf where our mission is simple: teach golfers how to take their game to its highest potential to experience greater consistency and have more fun.</p>

	<p>We believe that the true joy for any student of the game comes from the passion to learn more about the subject, the commitment to practice and develop their golf game and the challenge to continually improve their golf and themselves. Make a commitment to yourself to get better and visit our Academy to take your game inside the ropes.</p>

	<div class="row-fluid">
		<div class="span6">
			<div class="well">
				<h3 class="primary">Junior Golf</h3>

				<p>Golf has become an increasingly younger sport and something people all ages can enjoy. At Brian Jacobs Golf, we place an emphasis on education and honorable behavior, on and off the course. No matter if your child is just getting started or is already an accomplished player, we have a program to help take their game to the next level!</p>

				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('juniors') }}" class="btn btn-primary">More Info</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('juniors') }}" class="btn btn-primary btn-block btn-large">More Info</a>
				</div>
			</div>
		</div>

		<div class="span6">
			<div class="well">
				<h3 class="primary">Hit It Long, Hit It Straight</h3>

				<p>Make your driver one of the strengths of your game in 2013! Book a private instruction session during May and let us know you want to work on your driver. In addition to world-class instruction on how to hit your driver, you'll also receive a free driver fitting as part of your lesson and 10% off the Nike VRS Covert driver all month long!</p>

				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('event-special') }}" class="btn btn-primary">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('event-special') }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
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