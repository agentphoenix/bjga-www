@layout ('template')

@section('content')
	<h1>Private Instruction</h1>

	<p>Whether you're just getting started or are an avid golfer, we have the tools and resources to customize a program that fits your needs and will empower you to take your game to the next level. Our instructors are equipped to help you in all aspects of the game, including: club fitting, the full swing, putting, short game and on course strategy.</p>

	<p>Book your private instruction session today and take your game to a higher level!</p>

	<div class="row-fluid">
		<div class="span4">
			<div class="well">
				<h3 class="primary">30 Minute Lesson</h3>
				<p>30 minutes of private instruction with a Brian Jacobs Golf Instructor</p>
				<h3>$95</h3>
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary">More Info</a>
					<a href="#" class="btn btn-primary">Book Now</a>
				</div>
				<div class="visible-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="well">
				<h3 class="primary">60 Minute Lesson</h3>
				<p>60 minutes of private instruction with a Brian Jacobs Golf Instructor</p>
				<h3>$125</h3>
				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('contact', array('instruction')) }}" class="btn btn-primary">More Info</a>
					<a href="#" class="btn btn-primary">Book Now</a>
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

	<h2 class="pinseeker">Pin Seeker</h2>

	<div class="row-fluid">
		<div class="span6">
			<div class="well">
				<h3 class="primary">Pin Seeker: Short Game</h3>
				
				<p>Sharpen your short game with this brand-new group instruction program. We'll focus on pitching, chipping, bunker play and short irons and help you lock in on the flag stick more consistently.</p>
				
				<ul>
					<li>Tuesdays from 6pm to 7pm on the Mill Creek Short Course (cart not included)</li>
					<li>Program runs 5/21, 5/28, 6/4 and 6/11</li>
				</ul>
				
				<h3>$125 <small>per person</small></h3>
			</div>
		</div>

		<div class="span6">
			<div class="well">
				<h3 class="primary">Pin Seeker: Putting</h3>
				
				<p>Be the putter you always dreamed of being with this brand-new group instruction program geared toward putting. We'll focus on setup, path, impact and speed to make you more consistent with the flat stick.</p>

				<ul>
					<li>Thursdays from 6pm to 7pm on the Mill Creek Short Course (cart not included)</li>
					<li>Program runs 5/23, 5/30, 6/6 and 6/13</li>
				</ul>
				
				<h3>$125 <small>per person</small></h3>
			</div>
		</div>
	</div>
@endsection