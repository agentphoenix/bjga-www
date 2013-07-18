@layout('template')

@section('title')
	Staff
@endsection

@section('content')
	<h1>Meet the Brian Jacobs Golf Staff</h1>

	<div class="pull-right inline-image"><img src="{{ URL::to_asset('img/img-nick.png') }}" alt="" class="img-rounded"></div>

	<h3>Nick DiDuro <small>Associate Instructor</small></h3>

	<p>Nick was born and raised in Geneva, N.Y. He is currently a PGA Golf Management student at Coastal Carolina University in South Carolina. Prior to Coastal Carolina, Nick worked at Geneva Country Club under PGA Professional John Rossi for 4 years.</p>

	<p>Nick has a significant amount of playing experience as well. He played four years of Varsity golf for Geneva High School while also competing in individual tournaments at the county, section, and state level. He is dedicated to helping golfers of all different skill levels improve their game.</p>

	<!--<hr>

	<div class="pull-right inline-image"><img src="{{ URL::to_asset('img/img-ryan.jpg') }}" alt="" class="img-rounded"></div>

	<h3>Ryan Welch <small>Club Fitter</small></h3>

	<p>Ryan is a student of mechanical engineering at Rochester Institute of Technology and Monroe Community College. He also works as a Toyota Master mechanic. Ryan has taken his problem solving skills and is applying them to club fitting and repair. He is certified through Mitchell Golf School in club repair and shaft performance and is taking his passion of golf to deliver quality golf clubs and repairs to the western New York region.</p>-->
@endsection