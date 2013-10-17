@layout('template')

@section('title')
	Offseason Performance Series
@endsection

@section('content')
	<h1>Offseason Performance Series</h1>

	<p>It has been studied by a variety of golf experts and reported that regular instruction and consistent practice improve play! Why not let Brian Jacobs Golf help you take your game inside the ropes? Even in the off season it is important to think, learn and play golf.</p>

	<p>A performance series of lessons is just what you need to hit better drives, hit the ball closer to the hole with your irons and wedges and improve your putting!</p>

	<p>Wouldn't it be great to never lose your edge? Just stay in "golf shape"? Change some errors that you have so you can play consistently in the spring rather than taking the entire season to improve?</p>

	<p>The Brian Jacobs Golf Offseason Performance Series will do just that!</p>

	<hr>

	<div class="row-fluid">
		<div class="span4">
			<p><a href="#" class="btn btn-primary btn-block btn-large js-change" data-program="adults" id="adultsBtn">Adult Program</a></p>
		</div>
		<div class="span4">
			<p><a href="#" class="btn btn-block btn-large js-change" data-program="juniorElite" id="juniorEliteBtn">Junior Elite</a></p>
		</div>
		<div class="span4">
			<p><a href="#" class="btn btn-block btn-large js-change" data-program="linksters" id="linkstersBtn">Linksters</a></p>
		</div>
	</div>
	
	<div id="adults">
		<p>The Adult Performance Series will be available <strong class="primary">November 4th 2013</strong> through <strong class="primary">March 31st 2014</strong>. All services will be performed at Valle Sports on Ridge Road West unless booking the 12 month Performance Series.</p>

		<p>Each bundle will include:</p>

		<ul>
			<li>2 60 minute lesson with PGA Director of Instruction Brian Jacobs*</li>
			<li>2 60 minute practice sessions per month (range balls included)*</li>
		</ul>

		<div class="row-fluid">
			<div class="span4">
				<div class="well">
					<h3 class="primary">3 Month Committment</h3>
					<h3>$280 <small>per month</small></h3>
					<p>12 sessons @ $70/hour</p>
					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a>
					</div>
					<div class="visible-phone">
						<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="well">
					<h3 class="primary">6 Month Committment</h3>
					<h3>$260 <small>per month</small></h3>
					<p>24 sessons @ $65/hour</p>
					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a>
					</div>
					<div class="visible-phone">
						<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="well">
					<h3 class="primary">12 Month Committment**</h3>
					<h3>$240 <small>per month</small></h3>
					<p>48 sessons @ $60/hour</p>
					<div class="btn-group hidden-phone">
						<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a>
					</div>
					<div class="visible-phone">
						<a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a>
					</div>
				</div>
			</div>
		</div>

		<p class="muted">*Each student will have reserved the same lesson and practice day and time each month.</p>

		<p class="muted">**Combination of indoor season at Valle Sports and outdoor season at The Brian Jacobs Golf Academy at Mill Creek Golf Club.</p>

		<p class="muted">Performance Series is non-transferrable to the outdoor season at The Brian Jacobs Golf Academy at Mill Creek Golf Club and Practice Center.</p>

		<p class="muted"><span class="money"></span>Payment is expected in full on the first week of each month. Cash, personal check or credit card are all acceptable forms of payment. Please <a href="{{ URL::to_route('contact', array('general')) }}">contact us</a> if you have any questions about this.</p>
	</div>

	<div id="juniorElite" class="hide">
		<p>The Junior Performance Series will be available <strong class="primary">November 4th 2013</strong> through <strong class="primary">March 31st 2014</strong> as an after school program on Mondays, Wednesdays and Fridays.</p>

		<div class="row-fluid">
			<div class="span6">
				<div class="well">
					<h3 class="primary">Instruction &amp; Play</h3>
					<p><strong>Mondays, 3:30p - 5:30p</strong></p>
					<p>Valle Sports<br>4659 Ridge Road West</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
				</div>
			</div>

			<div class="span6">
				<div class="well">
					<h3 class="primary">Performance Training</h3>
					<p>Assessment and functional movement for golf</p>
					<p><strong>Wednesdays &amp; Fridays, 3:00p - 4:00p</strong></p>
					<p>Agape Physical Therapy, Brockport Office<br>92 West Ave Brockport</p>
					<p>Starts November 6th</p>
				</div>
			</div>
		</div>

		<p><strong>Each month of the program will follow the same time and day of week for the entire program.</strong></p>

		<h4>Golf Only</h4>
		<p><strong class="primary">$250</strong> per month per participant<br>(Use of simulator on day of program only)</p>

		<h4>Golf &amp; Performance Training</h4>
		<p><strong class="primary">$275</strong> per month<br>(Use of simulator on program day, use of Agape Physical Therapy Fitness area on training days only - memberships for additional training are available at an additional cost and can be used at any of the 4 locations - Brockport, Gates, Chili or Webster.)</p>

		<div class="btn-group hidden-phone">
			<p><a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a></p>
		</div>
		<div class="visible-phone">
			<p><a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a></p>
		</div>

		<p class="muted">Junior Performance Series are non-transferrable to the outdoor season at The Brian Jacobs Golf Academy at Mill Creek Golf Club and Practice Center.</p>

		<p class="muted"><span class="money"></span>Payment is expected in full on the first week of each month. Cash, personal check or credit card are all acceptable forms of payment. Please <a href="{{ URL::to_route('contact', array('general')) }}">contact us</a> if you have any questions about this.</p>
	</div>

	<div id="linksters" class="hide">
		<p>The Linksters Performance Series will be available <strong class="primary">November 9th 2013</strong> through <strong class="primary">March 29th 2014</strong> on Saturdays from <strong>10:00a</strong> to <strong>11:00a</strong>. The program is open to children ages 5 to 10 and is open to players of any ability.</p>

		<h4>Instruction &amp; Play</h4>
		<p><strong class="primary">$150</strong> per month per child</p>

		<div class="btn-group hidden-phone">
			<p><a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary">Email to Book Now</a></p>
		</div>
		<div class="visible-phone">
			<p><a href="{{ URL::to_route('contact', array('winter-lessons')) }}" class="btn btn-primary btn-large btn-block">Email to Book Now</a></p>
		</div>

		<p class="muted">Linksters Performance Series are non-transferrable to the outdoor season at The Brian Jacobs Golf Academy at Mill Creek Golf Club and Practice Center.</p>

		<p class="muted"><span class="money"></span>Payment is expected in full on the first week of each month. Cash, personal check or credit card are all acceptable forms of payment. Please <a href="{{ URL::to_route('contact', array('general')) }}">contact us</a> if you have any questions about this.</p>
	</div>

	<!--<h3>Valle Sports</h3>

	<p>With 15,000 square feet of space, Valle Sports is Rochester's premier baseball and softball training facility. In addition, Valle offers an 18 hole golf simulator for a round of golf, private lessons or a virtual driving range. Brian Jacobs Golf has a partnership with Valle to offer a facility for private instruction during the winter months.</p>

	<p>4659 Ridge Road West<br>
	Spencerport, NY 14559<br>
	(585) 349-7278</p>

	<div class="hidden-phone">
		<a href="http://maps.google.com/?q=4659 Ridge Road West Spencerport, NY 14559" target="_blank" class="btn btn-primary"><span class="map-pin"></span>View in Google Maps</a>
	</div>
	<div class="visible-phone">
		<a href="http://maps.google.com/?q=4659 Ridge Road West Spencerport, NY 14559" target="_blank" class="btn btn-primary btn-large btn-block">View in Google Maps</a>
	</div>-->
@endsection

@section('scripts')
	<script>

		$('.js-change').on('click', function(e)
		{
			e.preventDefault();

			var item = $(this);
			var program = $(this).data('program');

			// Hide everything
			$('#adults').addClass('hide');
			$('#juniorElite').addClass('hide');
			$('#linksters').addClass('hide');

			// Show the one we want
			$('#' + program).removeClass('hide');

			// Change the buttons
			$('#adultsBtn').removeClass('btn-primary');
			$('#juniorEliteBtn').removeClass('btn-primary');
			$('#linkstersBtn').removeClass('btn-primary');

			$(this).addClass('btn-primary');
		});

	</script>
@endsection