@layout('template')

@section('title')
	2013 Spring Golf Trip - Amelia Island Plantation
@endsection

@section('content')
	<h1>Amelia Island Plantation Spring Golf Trip</h1>

	<p>Between April 1st and 6th of 2013, Brian Jacobs Golf will be taking a small group of golfers down to sunny Florida and the exquisite golfer's paradise of the Omni Amelia Island Plantation. Featuring 36 holes of championship golf nestled between Spanish moss-covered oaks and the Atlantic Ocean, the resort boasts designs by Bobby Weed and the legendary Pete Dye that will challenge golfers of all levels.</p>

	<p>Each morning will begin with a clinic on the range with a Brian Jacobs Instructor before heading out to the course for 18 holes on the spectacular courses at Amelia Island. (Replay rounds will be available for $24.) After your round, you'll have the opportunity to book lessons with a Brian Jacobs Instructor if you need to work on different areas of your game.</p>

	<p>For your stay at the resort, there are several housing options:</p>

	<ul>
		<li>3 Bedroom Resort View Villa (Quad) living will be arranged for entire group unless otherwise indicated. (3 bedrooms housing, 4 people per Villa-Resort Villa contains 1 king bed, 1 queen and 2 twins plus a kitchen/living area-2 people will need to share the room with twin beds.)</li>
		<li>You may request 3 Bedroom Resort View Villa for 3 people for a fee of $35 additional per person/per night.</li>
		<li>You may request a 2 bedroom Resort View Villa for 2 people for a fee of $75 additional per person/per night.</li>
	</ul>

	<p>Please <a href="{{ URL::to_route('contact', array('general')) }}">contact us</a> and make your request if 3 Bedroom Resort View Villa (Quad) Living arrangement is unacceptable.</p>

	<h3>$995*</h3>

	<div class="hidden-phone">
		<a href="{{ URL::to_route('contact') }}" class="btn btn-primary">More Info</a>
	</div>
	<div class="visible-phone">
		<a href="{{ URL::to_route('contact') }}" class="btn btn-primary btn-block btn-large">More Info</a>
	</div><br>

	<p class="muted">* Airfare/meals not included</p>
@endsection