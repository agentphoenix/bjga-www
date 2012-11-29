@layout ('template')

@section('title')
	Private Instruction
@endsection

@section('content')
	<h1>Private Instruction</h1>

	<p>Whether you're just getting started or are an avid golfer, we have the tools and resources to customize a program that fits your needs and will empower you to take your game to the next level. Our instructors are equipped to help you in all aspects of the game, including: club fitting, the full swing, putting, short game and on course strategy.</p>

	<p>Book your private instruction session today and take your game to a higher level!</p>

	<div class="row-fluid">
		<div class="span4">
			<div class="well">
				<h3 class="primary">30 Minute <span class="hidden-tablet">Lesson</span></h3>
				<p>30 minutes of private instruction with a Brian Jacobs Golf Instructor</p>
				<h3>$95</h3>
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
				<h3 class="primary">60 Minute <span class="hidden-tablet">Lesson</span></h3>
				<p>60 minutes of private instruction with a Brian Jacobs Golf Instructor</p>
				<h3>$125</h3>
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
				<h3 class="primary">Playing Lesson</h3>
				<p>9-hole round with private instruction with a Brian Jacobs Golf Instructor</p>
				<h3>$275</h3>
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

	<h3>Bundles</h3>

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
					<li>9-hole playing lessons with follow-up after the round</li>
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
					<li>9-hole playing lessons with follow-up after the round</li>
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
	</div>
@endsection