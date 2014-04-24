@layout ('template')

@section('title')
	Private Instruction
@endsection

@section('content')
	<h1>Private Instruction</h1>

	<p>Whether you're just getting started or are an avid golfer, we have the tools and resources to customize a program that fits your needs and will empower you to take your game to the next level. Our instructors are equipped to help you in all aspects of the game, including: club fitting, the full swing, putting, short game, and on course strategy.</p>

	<div class="row-fluid">
		<div class="span6">
			<div class="well">
				<h3 class="primary">60 Minute <span class="hidden-tablet">Lesson</span></h3>
				<p>60 minutes of private instruction with a Brian Jacobs Golf Instructor. Includes 30 minutes of on-range instruction, 30 minutes of on-course instructions and unlimited play on the Mill Creek Short Course for the remainder of the day.</p>
				<h3>{{ $api->getServicesByName('private-lesson')['data']['price'] }}</h3>
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
				</div>
				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>

		<div class="span6">
			<div class="well">
				<h3 class="primary">Playing Lesson</h3>
				<p>Get in-depth and total instruction on your game with an on-course playing lesson from a Brian Jacobs Golf Instructor as you navigate 9 holes on either the Mill Creek Championship Course or the Mill Creek Short Course.</p>
				<h3>{{ $api->getServicesByName('9-hole-playing-lesson')['data']['price'] }}</h3>
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
				</div>
				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<div class="well">
				<h3 class="primary">Performance Series</h3>

				<p>Golf experts agree that regular and consistent practice leads to improvement. At Brian Jacobs Golf, we want to give you the tools to get better and our Performance Series offers a wide range of options to do just that!</p>

				<p>Centered around the idea of a regular practive schedule, booking a Performance Series gives you the opportunity to have instruction every week on the same day at the same time. Whether you want to commit to 3, 6, or 12 months, we have the program that can take your game inside the ropes!</p>

				<h3>Prices</h3>

				@foreach ($lessons as $lesson)
					@if ($lesson['occurrences'] > 1 and ! $lesson['loyalty'])
						<h4>{{ $lesson['price'] }} <small>{{ $lesson['name'] }}</small></h4>
					@endif
				@endforeach
				
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
				</div>
				<div class="visible-phone">
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>
	</div>

	<!--<h3>Bundles</h3>

	<p>We offer flexible private instruction bundles to give you the most for your money. Whether you're looking for long-term private instruction or something shorter, we have a bundle that fits your needs. All bundles include:</p>

	<ul>
		<li>Video analysis (available through your USchedule account)</li>
		<li>Brian Jacobs Golf student plan notebook</li>
	</ul>

	<div class="row-fluid">
		<div class="span4">
			<div class="well">
				<h4 class="primary">Bundle A</h4>

				<ul>
					<li>10 hours of private instruction (60 minute sessions only)</li>
					<li>Two 9-hole playing lessons with follow-up after the round</li>
				</ul>

				<h4>$1,650</h4>
				
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="well">
				<h4 class="primary">Bundle B</h4>

				<ul>
					<li>5 hours of private instruction (60 minute sessions only)</li>
					<li>9-hole playing lesson with follow-up after the round</li>
				</ul>

				<h4>$825</h4>

				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="well">
				<h4 class="primary">Bundle C</h4>

				<ul>
					<li>3 hours of private instruction (60 minute sessions only)</li>
					<li>9-hole playing lesson with follow-up after the round</li>
				</ul>

				<h4>$675</h4>

				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>
	</div>-->

	<!--<h3>Juniors and Beginners</h3>

	<p>Brian Jacobs Golf Associate Instructor Nick DiDuro is available for private instruction for Juniors and Beginners over the course of this summer. You can book lessons with Nick directly using the information below.</p>

	<dl>
		<dt>Email</dt>
		<dd>ndiduro@yahoo.com</dd>

		<dt>Telephone</dt>
		<dd>(315) 719-5082</dd>
	</dl>

	<h3 class="primary">$50 <small>per hour</small></h3>-->

	<br>
	<p class="muted"><span class="money"></span>Payment is expected at time of service. Cash, personal check or credit card are all acceptable forms of payment. Please <a href="{{ URL::to_route('contact', array('general')) }}">contact us</a> if you have any questions about this.</p>
@endsection