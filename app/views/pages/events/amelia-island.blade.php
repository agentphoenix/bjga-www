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
				<!--<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
				<div class="hidden-phone">
					<input type="submit" name="submit" class="btn btn-primary btn-block" value="Reserve Now">
				</div>
				<div class="visible-phone">
					<input type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="Reserve Now">
				</div>
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	</div>

	<p class="muted">* Airfare/meals not included</p>
@endsection