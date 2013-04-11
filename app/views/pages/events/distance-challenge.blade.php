@layout('template')

@section('title')
	Nike Golf VRS Covert Distance Challenge
@endsection

@section('content')
	<h1>Nike Golf VRS Covert Distance Challenge</h1>

	<p>Come find out how Nike Golf's 2013 line of products stacks up against what you've got in your bag at the <strong class="primary">Nike Golf VRS Covert Distance Challenge</strong> on the Championship Course Range at Mill Creek Golf Club on Saturday May 4th from 10am until 3pm.</p>

	<p>Nike Golf representatives will be on hand for 15 minute Flightscope sessions to test your current clubs against comparable Nike Golf clubs. In addition to testing clubs, you'll also get preferred pricing on all Nike Golf clubs today only! Space is limited, so contact us today to book your spot.</p>

	<div class="btn-group hidden-phone">
		<a href="{{ URL::to_route('contact') }}" class="btn btn-primary">Contact to Book Now</a>
	</div>

	<div class="visible-phone">
		<a href="{{ URL::to_route('contact') }}" class="btn btn-primary btn-block btn-large">Book Now</a>
	</div>
@endsection