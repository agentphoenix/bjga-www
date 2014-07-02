@layout('template')

@section('title')
	Youth Golf
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

	<h1>Youth Golf <small>Powered by Brian Jacobs Golf</small></h1>

	<p>Youth Golf is an important part of what we do at Brian Jacobs Golf. Over the last 15 years, golf has become an increasingly younger sport and something that people all ages can find enjoyment in. As with any program we offer, our Youth Golf programs are founded with an emphasis on education, honorable behavior, making an impact in a positive way and personal growth, both on and off the golf course. No matter if your child is just getting started or is already an accomplished player, we have a program to help take their game to the next level!</p>

	<div class="row-fluid">
		<div class="span12">
			<h2>Youth Golf Team <small>{{ $team['price'] }}</small></h2>
			{{ Sparkdown\Markdown($team['description']) }}

			<p><a href="http://booknow.brianjacobsgolf.com/" class="btn btn-primary">Book Now</a></p>
		</div>
	</div>
@endsection