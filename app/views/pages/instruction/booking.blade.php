@layout('template')

@section('content')
	<div class="booking-engine">
		<div class="loading align-center hide">
			<img src="{{ URL::to_asset('img/img-loader.gif') }}" alt=""><br>
			Loading USchedule...
		</div>
		<div class="loaded">
			<iframe src="http://brianjacobsgolf.uschedule.com/uschedulehome.aspx" width="944" scrolling="yes" height="938" frameborder="0"></iframe>
		</div>
	</div>
@endsection