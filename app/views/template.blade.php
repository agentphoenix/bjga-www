<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Brian Jacobs Golf</title>
	<meta name="viewport" content="width=device-width">
	
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-responsive.min.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/responsive.css') }}
	@yield('styles')

	<!--[if lt IE 9]>
	{{ HTML::style('css/ie.css') }}
	<![endif]-->

	<!-- High pixel density displays -->
	<link rel='stylesheet' href='{{ URL::to_asset('css/retina.css') }}' media='only screen and (-moz-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)'>
</head>
<body>
	<div class="container wrapper">
		@render('partials.nav-main')
		
		<header class="hidden-phone">
			<div class="row overlay">
				<div class="span5 offset1">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<h1 class="italic">Take your game inside the ropes...</h1>
				</div>
			</div>
			<!--<div class="row overlay">
				<div class="span5 offset1">
					<h1>Winter Lessons at Valle Sports</h1>
					<p>Sign up for indoor lessons this winter starting at $125! Or buy packages of 5, 7 or 12 lessons to hone your golf game while there's snow on the ground.</p>
					<p><a href="#" class="btn btn-large btn-inverse btn-block">Book Now</a></p>
				</div>
			</div>-->
		</header>

		<div class="visible-phone">@if (URI::is('/'))<div class="bjga-logo"></div>@endif</div>
		
		@render('partials.nav-sub')
		
		<section>
			<div class="inner">
				@yield('content')
			</div>
		</section>
		
		@render('partials.footer')
	</div>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/jquery.cycle.js') }}
	<script type="text/javascript">
		$(document).ready(function(){

			$('header').cycle({
				fx: 'scrollLeft',
				timeout: 7500
			});
		});
	</script>
	@yield('scripts')
</body>
</html>