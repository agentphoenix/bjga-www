@layout('template')

@section('title')
	2014 Spring Golf Trip - Amelia Island Plantation
@endsection

@section('content')
	<h1>Amelia Island Plantation Spring Golf Trip</h1>

	<p>Between April 13th and 17th of 2014, Brian Jacobs Golf will be taking a small group of golfers down to sunny Florida and the exquisite golfer's paradise of the Omni Amelia Island Plantation. Featuring 36 holes of championship golf nestled between Spanish moss-covered oaks and the Atlantic Ocean, the resort boasts designs by Bobby Weed and the legendary Pete Dye that will challenge golfers of all levels.</p>

	<p>Each morning will begin with a clinic on the range with a Brian Jacobs Instructor before heading out to the course for 18 holes on the spectacular courses at Amelia Island. After your round, you'll have the opportunity to book lessons with a Brian Jacobs Instructor if you need to work on different areas of your game.</p>

	<p>For your stay at the resort, there are several housing options:</p>

	<dl>
		<dt>Option 1: Resort Guest Room Villa with Balcony</dt>
		<dd>1 bedroom (no living room/kitchen/washer/dryer)</dd>
		<dd><h3 class="primary">$1,500 <small>per golfer</small></h3></dd>

		<dt>Option 2: Bedroom Resort View Villa</dt>
		<dd>Sleeps 3</dd>
		<dd>Living room/Kitchen/washer and dryer/Private bathroom in each room</dd>
		<dd><h3 class="primary">$995 <small>per golfer</small></h3></dd>

		<dt>Option 3: 3 Bedroom Resort View Villa</dt>
		<dd>Sleeps 4</dd>
		<dd>Living room/Kitchen/washer and dryer/Private bathroom in each room</dd>
		<dd><h3 class="primary">$995 <small>per golfer</small></h3></dd>

		<dt>Option 4: Ocean View Resort Room</dt>
		<dd><h3 class="primary">$1,775 <small>per golfer</small></h3></dd>

		<dt>Option 5: Family Package</dt>
		<dd>3 Bedroom Resort View Villa and 1 Golfer</dd>
		<dd>Living room/Kitchen/washer and dryer/Private bathroom in each room</dd>
		<dd><h3 class="primary">$2,400</h3></dd>
	</dl>

	<p><em>**If bringing your significant other, please select Option 1 or Option 4 only<br>
	**If a single, you will be paired with other singles and be assigned to either 2 or 3 bedroom lodging</em></p>

	<h3>What You Get</h3>

	<ul>
		<li>Lodging at the Amelia Island Resort</li>
		<li>Four Rounds of Golf at Oak Marsh and Ocean View Golf courses (2 at each location)</li>
		<li>Range time and clinic each morning previous to play with Brian Jacobs and Ed Bowe</li>
		<li>Private lessons (upon request)</li>
		<li>Pre-event mixer Sunday April 13th</li>
		<li>Nike Golf Tee Gift</li>
		<li>The chance to live and play at a 5 star resort when you friends are shoveling snow</li>
		<li>The chance to learn and prepare for the 2014 season</li>
	</ul>

	<h3>What You Don't Get</h3>

	<ul>
		<li>Transportation to or from the facility/airport ((shuttle service is available at an extra fee)</li>
		<li>Ground transportation while at the facility (shuttle service is available at an extra fee)</li>
		<li>Meals</li>
	</ul>

	<p><strong>Space is limited, so make sure you reserve your spot today with your $250 deposit!</strong></p>

	<p>The balance is due in full by February 28, 2014. Please make all checks payable to <strong>Brian Jacobs Golf</strong>. Checks can be mailed to:</p>

	<p>284 Chambers St.<br>
	Spencerport NY, 14559</p>

	<div class="hidden-phone">
		<a href="{{ URL::to_route('contact') }}" class="btn btn-primary">Contact Us to Book Now</a>
	</div>
	<div class="visible-phone">
		<a href="{{ URL::to_route('contact') }}" class="btn btn-primary btn-block btn-large">Contact Us to Book Now</a>
	</div>
@endsection