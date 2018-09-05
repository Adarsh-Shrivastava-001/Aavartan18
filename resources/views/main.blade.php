<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
		<meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="{{asset('frontEnd/main')}}/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="{{asset('frontEnd/main')}}/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="{{asset('frontEnd/main')}}/css/component.css" />
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
		<script src="{{asset('frontEnd/main')}}/js/modernizr.custom.25376.js"></script>
		@yield('head')
		<style media="screen">
			body{
				background-color: black;
			}
		</style>
	</head>
	<body style="position:relative;">
		<div id="perspective" class="perspective effect-laydown">
			<div class="container">
				<div class="wrapper"><!-- wrapper needed for scroll -->
				 <div style="margin-bottom:1vw;position:sticky;top:0px;width:100%;">
					 <button id="showMenu" style="display: inline-block;float:right;">Menu</button>
					 <img src="{{asset('frontEnd/aavartan')}}/Aavartan.png" height="70vw" width="auto" style="display: inline-block;">
				 </div>
				 <div>
				 		@yield('content')
				 </div>
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav top horizontal">
				<a href="/" class="icon-home">Home</a>
				<a href="/about" class="icon-news">About</a>
				<a href="/vigyaan" class="icon-image">Vigyaan</a>
				<a href="/events" class="icon-upload">Events</a>
				<a href="/gallery" class="icon-star">Gallery</a>
				<a href="/attractions" class="icon-mail">Attractions</a>
				<a href="/initiatives" class="icon-lock">Inititives</a>
				<a href="/login" class="icon-home">Login/Signup</a>
				<a href="/sponsors" class="icon-news">Sponsors</a>
				<a href="/schedule" class="icon-image">Schedule</a>
				<a href="/contactus" class="icon-upload">Contact Us</a>
				<a href="/team" class="icon-star">Team</a>
			</nav>
		</div><!-- /perspective -->
		@yield('scripts')
		<script src="{{asset('frontEnd/main')}}/js/classie.js"></script>
		<script src="{{asset('frontEnd/main')}}/js/menu.js"></script>
	</body>
</html>
