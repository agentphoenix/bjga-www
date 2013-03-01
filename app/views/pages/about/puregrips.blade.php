@layout('template')

@section('title')
	PURE Grips
@endsection

@section('content')
	<h1>PURE Grips</h1>

	<div class="pull-right inline-image"><img src="{{ URL::to_asset('img/logo-puregrips.png') }}" alt=""></div>

	<blockquote>
		If you play or practice once a week or more you should consider re-gripping your golf clubs a minimum of once a year. New grips can add greater shock absorption, traction and prevent the club from twisting in your hands. Old grips dry out over the course of the golf season and tend to be less shock absorbent. PURE Grips can also add life to your golf clubs and eliminate unnecessary shock or tension in the hands and arms. I highly recommend PURE Grips for any level of player due to their strength, durability and they stay consistently tacky in all types of weather.
		<small class='primary'>Brian Jacobs</small>
	</blockquote>

	<p>Advantages of using PURE Grips:</p>

	<ul>
		<li>100% rubber formula makes PURE Grips exceedingly durable in all weather conditions</li>
		<li>PURE Grips are guaranteed to remain tacky and supple up to twelve months</li>
		<li>Clubs can be used immediately after install - no dry time due to the use of NO SOLVENTS</li>
		<li>Endorsed by Hank Haney</li>
	</ul>

	<p>P2 Wrap features a perforated wrap design and fits golfers with standard size hands that prefer a slightly softer, more muted feel at impact. This grip is great for wet or humid locations and for those that really like a tacky feeling grip that will absorb some vibration.</p>

	<h4>Tapeless Installation</h4>

	<p>The installation of PURE Grips requires no adhesive tapes or solvents. The simple power of air pressure installs our grips as securely as any adhesive tape. Once installed on a steel or graphite shaft, the grip provides optimal stability while the elasticity of the rubber combines with friction to create "rubber memory," ensuring the grip will not loosen or slip.</p>

	<h2>Storm the Course Special</h2>

	<p>From now until April 31st, get your entire set of clubs (up to 13 clubs excluding putter) regripped with PURE Grips for just <strong class='primary'>$99</strong> (PURE Pro in black). If you only need a few clubs regripped, it's only <strong class='primary'>$9</strong> per grip and only .25 per club to build up tape under the grip. Take advantage of this offer and <strong class='primary'>storm the course</strong> in 2013!</p>

	<div class="hidden-phone">
		<a href="{{ URL::to_route('contact', array('regripping')) }}" class="btn btn-primary">More Info</a>
	</div>

	<div class="visible-phone">
		<a href="{{ URL::to_route('contact', array('regripping')) }}" class="btn btn-primary btn-block btn-large">More Info</a>
	</div>
@endsection