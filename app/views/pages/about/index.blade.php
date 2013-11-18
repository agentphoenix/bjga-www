@layout('template')

@section('title')
	Home
@endsection

@section('content')
	@if ($now->lte($now->copy()->month(9)->day(1)->year(2013)))
		<div class="row-fluid">
			<div class="span12">
				<div class="visible-desktop visible-tablet align-center">
					<br>
					<img src="{{ URL::to_asset('img/patriot-day.png') }}" alt="Patriot Day">
				</div>
				<div class="visible-phone" id="patriotDay"></div>

				<p>As a small token of our appreciation for everything our men and women in uniform do for us, we're giving back to them.</p>

				<p>Active and retired military personnel can come to Mill Creek Golf Club on Sunday September 1st for a free 30-minute private lesson with a Brian Jacobs Golf instructor. No matter if you want to work on your full swing, short game, putting, mental game or just develop on a plan to get better, we'll be happy to help you take your game inside the ropes!</p>

				<p>To book a lesson, <a href="{{ URL::to_route('contact') }}">contact us</a>. Lessons run from 9am until 8pm.</p>
			</div>
		</div>
	@else
		<h1 class="hidden-phone">Welcome to Brian Jacobs Golf</h1>
		<h1 class="visible-phone">Brian Jacobs Golf</h1>

		<p>Welcome to Brian Jacobs Golf where our mission is simple: teach golfers how to take their game to its highest potential to experience greater consistency and have more fun.</p>

		<p>We believe that the true joy for any student of the game comes from the passion to learn more about the subject, the commitment to practice and develop their golf game and the challenge to continually improve their golf and themselves. Make a commitment to yourself to get better and visit our Academy to take your game inside the ropes.</p>

		<div class="row-fluid">
			<!--<div class="span4">
				<div class="well">
					<h3 class="primary">Private Instruction</h3>

					<p>Whether you're just getting started or are an avid golfer, we have the tools and resources to customize a program that fits your needs and will empower you to take your game to the next level. Our instructors are equipped to help you in all aspects of the game, including: club fitting, the full swing, putting, short game and on course strategy.</p>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('juniors') }}" class="btn btn-primary">More Info</a>
						<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('juniors') }}" class="btn btn-primary btn-block btn-large">More Info</a>
						<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
					</div>
				</div>
			</div>

			<div class="span4">
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

			<div class="span4">
				<div class="well">
					<h3 class="primary">Junior Academy</h3>

					<p>We are the <strong>Home of Junior Golf</strong> and the Junior Academy provides elite junior golfers the opportunity to hone their skills through 30 hours of instruction and play a week during the summer. Covering everything from the full swing to short game to rules and etiquette, this specialized academy will help your junior take their game inside the ropes.</p>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('junioracademy') }}" class="btn btn-primary">More Info</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('junioracademy') }}" class="btn btn-primary btn-block btn-large">More Info</a>
					</div>
				</div>
			</div>-->

			<div class="span8">
				<div class="well">
					<h3 class="primary">Welcome to the Offseason!</h3>

					<p>Just because the weather's getting colder doesn't mean you need to put your golf clubs on ice too. In fact, this winter is the perfect opportunity to let Brian Jacobs Golf take your game inside the ropes with the new <strong class="primary">Offseason Performance Series</strong>!</p>

					<p>The Offseason Performance Series is just what you need to hit better drives, hit the ball closer to the hole with your irons and wedges and improve your putting, all through a series of instruction and practice! Make sure you don't lose your edge during the offseason and stay in "golf shape" so you're ready to go in the spring! There's an Offseason Performance Series for you regardless of age or experience so check it out today!</p>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('offseason') }}" class="btn btn-primary">More Info</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('offseason') }}" class="btn btn-primary btn-block btn-large">More Info</a>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="well">
					<h3 class="primary">Mark Your Calendar</h3>

					<p>Brian Jacobs Golf is doing another golf getaway this spring back to sunny Florida and Amelia Island Plantation (April 13th through the 17th)!</p>

					<p>Like previous golf trips, you'll have the opportunity for instruction with a Brian Jacobs Golf instructor and lots of time on the course, so grab some friends and take your game inside the ropes!</p>

					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('event-amelia-island-2014') }}" class="btn btn-primary">More Info</a>
					</div>

					<div class="visible-phone">
						<a href="{{ URL::to_route('event-amelia-island-2014') }}" class="btn btn-block btn-large btn-primary">More Info</a>
					</div>
				</div>
			</div>
		</div>

		@foreach ($announcements as $a)
			@if ($now >= $a['start'] and $now < $a['end'])
				<h3>{{ $a['title'] }}</h3>

				@if (isset($a['image']))
					<a href="{{ $a['link'] }}" target="_blank" class="pull-right"><img src="{{ URL::to_asset($a['image']) }}" alt=""></a>
				@endif

				{{ $a['content'] }}
			@endif
		@endforeach
	@endif
@endsection