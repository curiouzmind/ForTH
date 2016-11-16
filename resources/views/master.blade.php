<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
@include('includes.head')
</head>
<body>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div id="wrapper">
	<div class="header"><!-- Header Section -->
		@include('includes.header')
	</div>
	@yield('slide')
	<div class="content"><!-- Content Section -->
		<div class="about clearfix"><!-- About Section -->
			<div class="container">
				@yield('content')
			</div>
		</div>
		@yield('publications')
		@yield('support')
		@yield('newsletter')
		<div class="footer margint40"><!-- Footer Section -->
			<div class="main-footer">
				@yield('footer')
			</div>
			@include('includes.footer2')
		</div>
	</div>
</div>
<!-- JS FILES -->
<script src="{{asset('js/vendor/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/retina-1.1.0.min.js')}}"></script>
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/superfish.pack.1.4.1.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/selectordie.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('scripts')
<!--
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
-->
</body>
</html>