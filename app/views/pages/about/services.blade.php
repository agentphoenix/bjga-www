@layout('template')

@section('title')
	Services
@endsection

@section('content')
	<h1>Services</h1>

	<p>At Brian Jacobs Golf, we offer a wide range of services beyond our world-class golf instruction. If you need your clubs re-gripped or premier fitting services, we can help you make sure your equipment is fit perfectly for you and that you're getting the most out of it. Contact us today about our services.</p>

	<h2>PURE Grips</h2>

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

	<h4>Tapeless Installation</h4>

	<p>The installation of PURE Grips requires no adhesive tapes or solvents. The simple power of air pressure installs our grips as securely as any adhesive tape. Once installed on a steel or graphite shaft, the grip provides optimal stability while the elasticity of the rubber combines with friction to create "rubber memory," ensuring the grip will not loosen or slip.</p>

	<!--<h2>Storm the Course Special</h2>

	<p>From now until April 31st, get your entire set of clubs (up to 13 clubs excluding putter) regripped with PURE Grips for just <strong class='primary'>$99</strong> (PURE Pro in black). If you only need a few clubs regripped, it's only <strong class='primary'>$9</strong> per grip and only .25 per club to build up tape under the grip. Take advantage of this offer and <strong class='primary'>storm the course</strong> in 2013!</p>-->

	<div class="hidden-phone">
		<a href="{{ URL::to_route('contact', array('regripping')) }}" class="btn btn-primary">More Info</a>
	</div>

	<div class="visible-phone">
		<a href="{{ URL::to_route('contact', array('regripping')) }}" class="btn btn-primary btn-block btn-large">More Info</a>
	</div>

	<hr>

	<h2>Club Fitting</h2>

	<div class="row-fluid">
		<div class="span6">
			<h4>Loft &amp; Lie Adjustments</h4>

			<table class="table table-striped table-bordered">
				<tbody>
					<tr>
						<td class="span6">Fairway Wood</td>
						<td class="span6">$5</td>
					</tr>
					<tr>
						<td class="span6">Hybrid</td>
						<td class="span6">$10</td>
					</tr>
					<tr>
						<td class="span6">Iron</td>
						<td class="span6">$5</td>
					</tr>
					<tr>
						<td class="span6">Iron Set</td>
						<td class="span6">$30</td>
					</tr>
					<tr>
						<td class="span6">Putter</td>
						<td class="span6">$10</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="span6">
			<h4>Re-Shafting</h4>

			<table class="table table-striped table-bordered">
				<tbody>
					<tr>
						<td class="span6">Fairway Wood</td>
						<td class="span6">$25</td>
					</tr>
					<tr>
						<td class="span6">Hybrid</td>
						<td class="span6">$20</td>
					</tr>
					<tr>
						<td class="span6">Iron</td>
						<td class="span6">$18</td>
					</tr>
					<tr>
						<td class="span6">Putter</td>
						<td class="span6">$10</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<h4>Length Alterations</h4>

			<table class="table table-striped table-bordered">
				<tbody>
					<tr>
						<td class="span6">Extend Steel</td>
						<td class="span6">$8</td>
					</tr>
					<tr>
						<td class="span6">Extend Graphite</td>
						<td class="span6">$10</td>
					</tr>
					<tr>
						<td class="span6">Shorten</td>
						<td class="span6">$4</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="span6">
			<h4>Swing Weight</h4>

			<table class="table table-striped table-bordered">
				<tbody>
					<tr>
						<td class="span6">Lead Tape</td>
						<td class="span6">$5</td>
					</tr>
					<tr>
						<td class="span6">Tungsten Powder</td>
						<td class="span6">$5</td>
					</tr>
					<tr>
						<td class="span6">Brass Tip Weight*</td>
						<td class="span6">$5</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<h4>Re-Gripping</h4>

			<table class="table table-striped table-bordered">
				<tbody>
					<tr>
						<td class="span6">Re-Grip**</td>
						<td class="span6">$3</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="span6">
			<h4>Club Fitting</h4>

			<table class="table table-striped table-bordered">
				<tbody>
					<tr>
						<td class="span6">Driver</td>
						<td class="span6">$45</td>
					</tr>
					<tr>
						<td class="span6">Irons</td>
						<td class="span6">$90</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<p class="muted"><em>* Brass Tip Weight requires additional re-shaft labor</em></p>
	<p class="muted"><em>** Excludes the cost of the grip</em></p>

	<div class="hidden-phone">
		<a href="{{ URL::to_route('contact', array('general')) }}" class="btn btn-primary">Contact to Schedule</a>
	</div>

	<div class="visible-phone">
		<a href="{{ URL::to_route('contact', array('general')) }}" class="btn btn-primary btn-block btn-large">Contact to Schedule</a>
	</div>
@endsection