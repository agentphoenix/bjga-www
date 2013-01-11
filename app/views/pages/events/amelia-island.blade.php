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

	<p>Space is limited, so make sure you reserve your spot today with your $200 deposit!</p>

	<h3>$995*</h3>

	<div class="row-fluid">
		<div class="span2">
			<div class="hidden-phone">
				<a href="{{ URL::to_route('contact') }}" class="btn btn-primary btn-block">More Info</a>
			</div>
			<div class="visible-phone">
				<a href="{{ URL::to_route('contact') }}" class="btn btn-primary btn-block btn-large">More Info</a>
			</div>
		</div>
		<div class="span2">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
				">

				<div class="hidden-phone">
					<input type="submit" name="submit" class="btn btn-primary btn-block" value="Pay Now">
				</div>
				<div class="visible-phone">
					<input type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="Pay Now">
				</div>
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	</div>

	<p class="muted">* Airfare/meals not included</p>
@endsection