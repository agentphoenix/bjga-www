@layout('template')

@section('title')
	Juniors Golf
@endsection

@section('content')
	@if (Request::env() == 'local')
		<p></p>

		<object type="application/x-shockwave-flash" 
			data="{{ URL::to_asset('allstate.swf') }}" 
			width="728" height="90">
				<param name="movie" value="{{ URL::to_asset('allstate.swf') }}" />
				<param name="quality" value="high"/>
		</object>
	@endif

	<h1>Junior Golf <small>Powered by Brian Jacobs Golf</small></h1>

	<p>Juniors Golf is an important part of what we do at Brian Jacobs Golf. Over the last 15 years, golf has become an increasingly younger sport and something that people all ages can find enjoyment in. As with any program we offer, our Juniors Golf programs are founded with an emphasis on education, honorable behavior, making an impact in a positive way and personal growth, both on and off the golf course. No matter if your child is just getting started or is already an accomplished player, we have a program to help take their game to the next level!</p>

	<div class="row-fluid">
		<div class="span4">
			<div class="well">
				<h2>Linksters</h2>

				<p>The Linksters program is designed for junior golfers between the ages of 5 and 15 who are interested in golf and want to learn how to play in a fun and inviting atmosphere.</p>

				<div class="hidden-phone">
					<a href="{{ URL::to_route('linksters') }}" class="btn btn-primary">More Info</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('linksters') }}" class="btn btn-primary btn-block btn-large">More Info</a>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="well">
				<h2>Junior Golf Camps</h2>

				<p>Junior Golf camps are designed as half or full day camps for junior golfers who have previously had instruction and/or play regularly and want to deepen their skills.</p>

				<div class="hidden-phone">
					<a href="{{ URL::to_route('juniorcamps') }}" class="btn btn-primary">More Info</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('juniorcamps') }}" class="btn btn-primary btn-block btn-large">More Info</a>
				</div>
			</div>
		</div>

		<div class="span4">
			<div class="well">
				<h2>Junior Team</h2>

				<p>The Junior Team is designed for serious junior golfers who are interested in taking their game to the next level through instruction and play twice a week.</p>

				<div class="btn-group hidden-phone">
					<a href="{{ URL::to_route('juniorteam') }}" class="btn btn-primary">More Info</a>
					<a href="{{ URL::to_route('booking', array('event', 79219)) }}" class="btn btn-primary">Book Now</a>
				</div>

				<div class="visible-phone">
					<a href="{{ URL::to_route('juniorteam') }}" class="btn btn-primary btn-block btn-large">More Info</a>
					<a href="{{ URL::to_route('booking', array('event', 79219)) }}" class="btn btn-primary btn-block btn-large">Book Now</a>
				</div>
			</div>
		</div>
	</div>
@endsection