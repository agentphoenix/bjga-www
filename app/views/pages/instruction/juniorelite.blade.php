@layout('template')

@section('title')
	Junior Elite Program
@endsection

@section('content')
	<h1>Junior Elite Program</h1>

	<div class="pull-right inline-image hidden-phone"><img src="{{ URL::to_asset('img/img-juniors.jpg') }}" alt="" class="img-rounded"></div>

	<p>The Brian Jacobs Golf Junior Elite Program, as with any program we offer, is founded with an emphasis on education, honorable behavior, making an impact in a positive way and personal growth, both on and off the golf course.</p>

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

	<p>The Brian Jacobs Golf Junior Elite Program is open to boys and girls ages 10 to 17 and involves two afternoons per week, Wednesdays (6-8pm at the Short Course) and Sundays (3:30-6pm at the Championship Course) for the Summer session and for the Spring/Fall sessions (May-June and September) Saturday afternoons (2-5pm) alternating between the Short Course and Championship course. In addition, each participant will be entitled to two 60-minute private lessons per month with Brian Jacobs.</p>

	<p>For 2013, the Junior Elite Program runs from <strong>Saturday May 4th</strong> until <strong>Saturday September 28th</strong> (there won't be any events on Wednesday July 3rd or Saturday September 2nd).</p>

	<p>Participation in the Brian Jacobs Golf Junior Elite Program includes:</p>

	<ul>
		<li>Brian Jacobs Golf Nike Golf Hat</li>
		<li>10% off all Nike products in the Pro Shop (excludes golf balls and gloves)</li>
		<li>15% off Custom Nike orders and/or Brian Jacobs Golf Nike Gear</li>
		<li>Player of the Year and runner up (boys and girls) trophy</li>
		<li>Two 60-minute private lessons per month</li>
	</ul>

	<h3>$275 <small>per month Summer Session (July/August)*</small></h3>

	<h3>$225 <small>per month Spring/Fall Sessions (May, June, September)*</small></h3>

	<div class="hidden-phone">
		<a href="{{ URL::to_route('booking', array('event', 79219)) }}" class="btn btn-primary">Book Now</a>
	</div>

	<div class="visible-phone">
		<a href="{{ URL::to_route('booking', array('event', 79219)) }}" class="btn btn-primary btn-block btn-large">Book Now</a>
	</div>

	<p class="muted"><em>* Payment is due by the 1st day of every month and lessons must be completed each month. Lesson balances will not be carried to the next month.</em></p>
 
	<p class="muted"><em>** Pickup time is 6:00pm on Sunday sessions.</em></p>

	<p class="muted"><em>*** Pickup time is 8:00pm for Wednesday sessions.</em></p>

	<p class="muted"><em>**** Pick up time is 5:00pm for Saturday sessions.</em></p>
@endsection