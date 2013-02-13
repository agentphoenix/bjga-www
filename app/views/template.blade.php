<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Brian Jacobs Golf &bull; @yield('title')</title>
	<meta name="description" content="Brian Jacobs Golf Academy is committed to providing the best golf instruction in western New York and helping golfers of all skills be more consistent and enjoy the game more.">
	<meta name="author" content="Brian Jacobs">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="{{ URL::to_asset('favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="{{ URL::to_asset('apple-touch-icon.png') }}">
	
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script type="text/javascript" src="//use.typekit.net/ucb4auf.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
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

		@render('partials.header')
		
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
				fx: 'fade',
				timeout: 6000
			});
		});
	</script>
	@yield('scripts')
	
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36788318-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</body>
</html>