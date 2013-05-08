@layout('template')

@section('title')
	2013 Specialized Instruction
@endsection

@section('content')
	<h1>Specialized Instruction</h1>

	<p>Each month this summer, we're offering specialized instruction on the different clubs in your bag as well as free club fittings and discounts on Nike Golf equipment.</p>

	<p>When you take one of our specialized instruction sessions each month, you'll get a ticket. Collect all four tickets and you'll earn a free lesson in September. Collect three and you'll be able to enjoy a full day of play on the Mill Creek Golf Club Short Course. Collect 2 and you'll enjoy 9 holes on the Mill Creek Golf Club Short Course.</p>

	<p>Come in today and let us help you take your game inside the ropes!</p>

	<h2>The Schedule</h2>

	<ul>
		<li><strong>May</strong> - Hit It Long, Hit It Straight: You and Your Driver</li>
		<li><strong>June</strong> - Demystifying Your Fairway Wood and Hybrid</li>
		<li><strong>July</strong> - Mastering Your Irons</li>
		<li><strong>August</strong> - Becoming a Short Game Guru</li>
	</ul>

	<h2>This Month</h2>

	@if ($now->gte($aprilStart) and $now->lte($aprilEnd))
		<p>Get into Brian Jacobs Golf today and start sharpening your game for the 2013 season. Starting next month, we'll be offering specialized instruction to help you get better with every club in your bag. Get ready to take your game inside the ropes!</p>
	@elseif ($now->gte($mayStart) and $now->lte($mayEnd))
		<p>During the month of May, bring in your driver and in addition to teaching you how to hit it the right way, we'll also give you a free driver fitting as well. The best way to ensure you're hitting the ball long and straight off the tee is to make sure you're using the right equipment. If you're in the market for a new driver, let us get you into the revolutionary Nike VRS Covert driver for 10% off all month long.</p>
	@elseif ($now->gte($junStart) and $now->lte($junEnd))
		<p>For the entire month of June, we're focusing on fairway woods and hybrids at Brian Jacobs Golf. Bring in your fairway wood(s) and/or hybrid(s) and we'll teach you how to get the most out of these clubs as well as a free fitting to ensure you're hitting the ball with the right equipment. If you're in the market for a new fairway wood and/or hybrid, let us get you into the long and versatile Nike VRS Covert fairway woods and hybrids for 10% off all month long.</p>
	@elseif ($now->gte($julStart) and $now->lte($julEnd))
		<p>With the summer in full swing, we're turning our attention to your irons at Brian Jacobs Golf. All month long, bring your irons in and we'll give you world-class instruction on hitting everything from a 3 iron to a wedge to get your approach shots as close as possible as well as providing a free iron fitting. Whether you're looking for the long and forgiving Nike VRS Covert irons or the impeccable precision of Nike's forged irons, we'll get you into the right irons for 10% off all month long.</p>
	@elseif ($now->gte($augStart) and $now->lte($augEnd))
		<p>With the golf season halfway over, it's time to dial in your wedges and putter to save precious strokes. Throughout August, Brian Jacobs Golf is the best place to go to hone your short game. When you come in during August, in addition to world-class instruction, you'll also get fit for your wedges and putter and see the benefits of our Eyeline Golf products.</p>
	@endif

	<div class="btn-group hidden-phone">
		<a href="{{ URL::to_route('booking') }}" class="btn btn-primary">Book Now</a>
	</div>

	<div class="visible-phone">
		<a href="{{ URL::to_route('booking') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
	</div>
@endsection