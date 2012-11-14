@layout('template')

@section('content')
	<h1 class="visible-desktop">Welcome to Brian Jacobs Golf</h1>
	<h1 class="visible-phone">Brian Jacobs Golf</h1>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et congue mauris. Pellentesque rhoncus, nisl a varius sollicitudin, purus mauris porta ligula, id pellentesque arcu urna non massa. Pellentesque tincidunt tempus quam, ac consequat massa varius quis. Quisque in velit arcu, vitae vulputate tortor. In tempus tristique mi, accumsan cursus lacus aliquam vitae. Morbi placerat nisi enim. Etiam ac condimentum erat. Aenean ultrices consequat tincidunt.</p>

	<div class="row-fluid">
		<div class="span4">
			<div class="well">
				<h3 class="primary">Private Instruction</h3>
				<p>Book a private instruction session or playing lesson at Mill Creek Golf Club with a Brian Jacobs Golf Instructor and start improving your game.</p>
				
				<div class="btn-group visible-desktop">
					<a href="{{ URL::to_route('private') }}" class="btn btn-primary">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('private') }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="well">
				<h3 class="primary">Golf Schools</h3>
				<p>Participate in one of our many golf schools where you'll be given the tools necessary to take your game to the next level.</p>
				
				<div class="btn-group visible-desktop">
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
				
				<div class="btn-group visible-desktop">
					<a href="{{ URL::to_route('contact') }}" class="btn btn-primary">Contact Us for Booking Info</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('contact') }}" class="btn btn-primary btn-block btn-large">Contact Us for Booking Info</a>
				</div>
			</div>
		</div>
	</div>
@endsection