@layout('template')

@section('title')
	2013 Junior Golf Camps
@endsection

@section('content')
	<h1>2013 Junior Golf Camps</h1>

	<p>From the beginner golfer to the advanced player, our Junior Golf Schools and Junior Golf Camps are our most popular junior programs. These Junior Golf Schools and Junior Golf Camps are for boys and girls ages 6-15 with an 8:1 student-to-teacher ratio. Each camp or school is four consecutive days. Instruction on all aspects of the game is provided as well as on course play with the Full Day Junior Golf Camps having more intense periods of instruction, performance training and more time dedicated to on course play. Attendees of either camp will learn full swing fundamentals, short game, golf course rules and etiquette and much more in a fun and challenging setting.</p>

	<p>Brian Jacobs Golf Full Day Junior Golf Camps are reserved for youth that have either had instruction, have been on the course and play regularly, want to deepen his/her skill level in the game, played Junior Golf events and/or is preparing for competing in Junior Tournaments or playing Junior High or High School golf.</p>

	<p>Half Day Junior Camps are reserved for a youth who may have played on the golf course a few times, have basic or no knowledge of the game and are looking to begin a start in the game with a solid foundation.</p>

	<h3>Full Day Camp</h3>

	<dl>
		<dt>9am - 3pm</dt>
		<dd>Instruction on full swing, putting, chipping, pitching and bunker shots. Performance assessments and training occur each day to give your junior a stable core, speed, strength, endurance and a competitive edge. Play the course each day (competition each day either medal or match play format).</dd>
		<dd>Box lunch will be provided</dd>

		<dt>3pm</dt>
		<dd>Camp adjourns</dd>

		<dt>3pm - 3:30pm</dt>
		<dd>Instructors available to answer questions and to provide further assistance</dd>
	</dl>

	<h3 class="primary">$299</h3>

	<h3>Half Day Camp</h3>

	<dl>
		<dt>9am - 12pm</dt>
		<dd>Instruction on full swing, putting, chipping, pitching, bunker shots, performance assessments and training and course play</dd>

		<dt>12pm</dt>
		<dd>Camp adjourns</dd>

		<dt>12pm - 12:30pm</dt>
		<dd>Instructors available to answer questions and to provide further assistance</dd>
	</dl>

	<h3 class="primary">$199</h3>

	<h3>Calendar</h3>

	<p class="alert alert-info">All Junior Golf Camps are Tuesday - Friday.</p>

	<ul>
		<li>July 9th - July 12th (Full day camp)</li>
		<li>July 16th - July 19th (Half day camp)</li>
		<li>July 23rd - July 26th (Full day camp)</li>
		<li>July 30th - August 2nd (Half day camp)</li>
		<li>August 6th - August 9th (Full day camp)</li>
		<li>August 13th - August 16th (Full day camp)</li>
	</ul>

	<p>If a date is not available and you have a group of 6 or more Juniors that wishes to come to a camp together, we are happy to do our best to accommodate you and your junior golfers date and time schedule! Camps can be customized to fit your busy needs based on our Instructors availability.</p>

	<p>Team discounts are available!</p>

	<p>Please <a href="{{ URL::to_route('contact', array('general')) }}">contact us</a> and a representative of Brian Jacobs Golf will contact you to discuss your needs and to book your customized Junior Camp.</p>
@endsection