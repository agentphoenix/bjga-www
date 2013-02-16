@layout('template')

@section('title')
	Linksters
@endsection

@section('content')
	<h1>Linksters Junior Golf Program</h1>

	<div class="pull-right inline-image hidden-phone"><img src="{{ URL::to_asset('img/img-juniors.jpg') }}" alt="" class="img-rounded"></div>

	<p>The Brian Jacobs Golf Academy wants to offer your child the opportunity to learn the game of golf the right way and build on that foundation with each session. To do that, we teach golf skills, etiquette and rules while playing on the Mill Creek Short Course each week*.</p>

	<p>The Linksters Junior Golf Program is open to boys and girls ages 5 to 15 and involves instruction and play on Saturday afternoons at the Mill Creek Short Course. For 2013, Linksters will be split into two semesters. The first semester will run from <strong>May 19th</strong> until <strong>June 29th</strong> and the second semester will run from <strong>July 13th</strong> until <strong>August 24th</strong>.</p>

	<h4>Group Instruction Times</h4>

	<dl>
		<dt>11-15 year olds</dt>
		<dd><span class="clock-icon"></span> 12:00 pm</dd>

		<dt>8-10 year olds</dt>
		<dd><span class="clock-icon"></span> 12:30 pm</dd>

		<dt>5-7 year olds</dt>
		<dd><span class="clock-icon"></span> 1:00 pm</dd>
	</dl>

	<h3>$70 <small>per semester per participant</small></h3>

	<div class="hidden-phone">
		<a href="{{ URL::to_route('booking', array('event', 85631)) }}" class="btn btn-primary">Book Now</a>
	</div>

	<div class="visible-phone">
		<a href="{{ URL::to_route('booking', array('event', 85631)) }}" class="btn btn-primary btn-block btn-large">Book Now</a>
	</div>

	<p class="muted"><em>* Parents/guardians are encouraged to remain at Linksters and are welcome to observe and supervise the children and even play golf themselves!</em></p>
@endsection