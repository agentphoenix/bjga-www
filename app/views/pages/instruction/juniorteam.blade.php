@layout('template')

@section('title')
	Junior Team
@endsection

@section('content')
	<h1>Junior Team</h1>

	<div class="pull-right inline-image hidden-phone"><img src="{{ URL::to_asset('img/img-juniors.jpg') }}" alt="" class="img-rounded"></div>

	<p>The Brian Jacobs Golf Academy Junior Team, as with any program we offer, is founded with an emphasis on education, honorable behavior, making an impact in a positive way and personal growth, both on and off the golf course.</p>

	<p>Our goal is to model high moral standards and integrity for every one of our students. Golf is a unique game of honesty, sportsmanship and high integrity, traits that translate from the golf course to every day life. While golf may be a sport and intense competition, we are all students first and athletes second. The ultimate goal for us is to support and develop young adults who want to make an impact on society and in golf. It's that end product that makes us strive to never stop learning and realize we are always a work in progress and that understanding pushes us to develop and grow with an unwavering focus on getting better every day, on and off the golf course. Commitment to such a cause, and hard work, will always pay dividends. Working toward a goal can be a great challenge, but it can also be fulfilling, rewarding and fun!</p>

	<h3>Student Goals</h3>

	<ul>
		<li>Develop and model excellent etiquette and character on and off the golf course</li>
		<li>Participate with a positive attitude</li>
		<li>Always give your best effort</li>
		<li>Get better every day</li>
		<li>Have fun being part of a team</li>
		<li>Compete hard and be humble in victory and gracious in defeat</li>
		<li>Learn to play golf by the established rules and <strong>never</strong> cheat</li>
		<li>Learn and develop excellent skills in the game of golf</li>
	</ul>

	<h3>Coaches Goals</h3>

	<ul>
		<li>Model excellent etiquette and character both on and off the golf course</li>
		<li>Teach with a positive attitude</li>
		<li>Always give our best effort</li>
		<li>Get better every day</li>
		<li>Have fun being part of a team</li>
		<li>Be humble and gracious; serve at the highest level</li>
		<li>Teach and enforce the established rules of golf and <strong>never</strong> cheat</li>
		<li>Teach the skills of the game of golf and reinforce learning in a positive manner</li>
	</ul>

	<h3>Overview</h3>

	<p>The Brian Jacobs Golf Junior Team is open to boys and girls ages 7 to 18 and involves two afternoons per week (Wednesdays and Sundays). For 2013, the Junior Team program runs from <strong>Sunday June 2nd</strong> until <strong>Sunday September 29th</strong> (there won't be any events on Wednesday July 3rd or Sunday September 1st).</p>

	<p class="alert alert-info">There will be a mandatory parents meeting on Wednesday May 29th at 6:00p at Mill Creek's Tavern dining area.</p>

	<p>On Wednesdays, we'll focus on the short game at Mill Creek's Short Course and on Sunday afternoons we'll focus on the long game on Mill Creek's Championship Course.</p>

	<ul>
		<li>On Wednesdays, we'll start with a clinic at 6:00pm at the Mill Creek Short Course followed by supervised play.***</li>
		<li>On Sundays, we'll start with a clinic at 3:30pm at the Mill Creek Championship Course Practice Tee followed by supervised play.****</li>
	</ul>

	<p>Each week there will be two scoring events within each students' age groups (7-9, 10-12, 13-15 and 16-18). All scoring goes into a points system for Player of the Year in each age group.</p>

	<p>Participation in the Brian Jacobs Golf Junior Team includes:</p>

	<ul>
		<li>Certificate of participation for each child on team</li>
		<li>Eyeline Golf yardage book</li>
		<li>10% off all Nike products in the Pro Shop (excludes golf balls and gloves)</li>
		<li>15% off Custom Nike orders and/or Brian Jacobs Golf Nike Gear</li>
		<li>Player of the Year and runner up (boys and girls) trophy</li>
	</ul>

	<h3>$199 <small>per month*</small></h3>

	<p class="muted"><em>* Payment is due by the 1st day of every month and requires a commitment to at least three out of the four months the program is offered</em></p>
 
	<p class="muted"><em>** Personalized performance coaching is available at an additional charge. <a href="{{ URL::to_route('contact', array('general')) }}">Contact us</a> for pricing.</em></p>

	<p class="muted"><em>*** Pickup time on Wednesdays is 8:15pm.</em></p>

	<p class="muted"><em>**** Pickup time on Sundays is 6:00pm.</em></p>
@endsection