@layout ('template')

@section('title')
	Golf Clinics
@endsection

@section('content')
	<h1>Clinics</h1>

	<p>While our private instruction is usually one-on-one or two-on-one, there are times when larger groups of 3, 6, 9 or more may want to utilize the resources and expertise of our staff. For those situations, we offer flexible clinic programs that can be scheduled to accommodate larger groups.</p>

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
				
				<h3>$99</h3>
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
				
				<h3>$99</h3>
			</div>
		</div>
	</div>

	<h2>Custom Clinics</h2>

	<p>Heading out of town for a golf trip with your friends? A Brian Jacobs Golf Clinic can get you and your friends tuned up and ready to play. Have a small golf league or tournament that you'd like to offer a clinic before? We build highly custom clinics that allow you to cater the material to what you'd like to work on.</p>

	<p>Our clinic programs offer all the benefits of private instruction for larger groups and can be done any day of the week, provided we have availability. We're happy to work with you to design a clinic program that fits the needs of your group. Please contact us for more information about building a clinic today.</p>

	<div class="visible-desktop"><a href="{{ URL::to_route('contact', array('clinics')) }}" class="btn btn-primary">Contact Us for Clinic Info</a></div>
	<div class="hidden-desktop"><a href="{{ URL::to_route('contact', array('clinics')) }}" class="btn btn-primary btn-block btn-large">Contact Us for Clinic Info</a></div>
@endsection