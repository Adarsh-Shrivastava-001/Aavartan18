@extends('main')
@section('head')
<title>eventsw</title>
<link rel="stylesheet" type="text/css" href="{{asset('frontEnd/events')}}/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="{{asset('frontEnd/events')}}/css/lightbox.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd/events')}}/css/checkbox.css"/>
		<link rel="stylesheet" type="text/css" href="{{asset('frontEnd/events')}}/css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="{{asset('frontEnd/events')}}/js/modernizr.custom.52731.js"></script>
@endsection
@section('content')
<div class="container">
          <h3 class="pb-titlehead">Events</h3>


			<!-- Codrops top bar -->
            <!-- <div class="codrops-top">
                <a href="http://tympanus.net/Tutorials/ModernBlockQuoteStyles/">
                    <strong>&laquo; Previous Demo: </strong>Modern Block Quote Styles
                </a>
                <span class="right">
					<a href="http://www.flickr.com/people/smanography/">Images by Sherman Geronimo-Tan</a>
                    <a href="http://tympanus.net/codrops/2012/08/01/photo-booth-strips-with-lightbox/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div> -->
            <!-- </div> -->
            <!--/ Codrops top bar -->

			<!-- <header> -->

				<!-- <h1>Photo Booth Strips</h1> -->
				<!-- <h2>Scrollable photo strip + Lightbox 2 <br> <strong>Scroll with your mousewheel or finger</strong></h2> -->

				<!-- <div class="support-note"> -->
          <!-- let's check browser support with modernizr -->
					<!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
					<!-- <span class="no-csstransforms">CSS transforms are not supported in your browser</span> -->
					<!--span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span-->
					<!--span class="no-csstransitions">CSS transitions are not supported in your browser</span-->
					<!-- <span class="no-generatedcontent">CSS generated content is not supported in your browser</span> -->
					<!-- <span class="note-ie">Sorry, only modern browsers.</span> -->
				<!-- </div> -->

			<!-- </header> -->

			<section id="main" class="main">


				<div class="pb-wrapper pb-wrapper-1">
          <h3 class="pb-title">Technical</h3>

					<div class="pb-scroll">
						<ul class="pb-strip">
							<li><a href="{{asset('frontEnd/events')}}/images/large/1.jpg" rel="lightbox[album1]" title="event1"><img src="{{asset('frontEnd/events')}}/images/small/1.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/2.jpg" rel="lightbox[album1]" title="eventname"><img src="{{asset('frontEnd/events')}}/images/small/2.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/3.jpg" rel="lightbox[album1]" title="namehere"><img src="{{asset('frontEnd/events')}}/images/small/3.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/4.jpg" rel="lightbox[album1]" title="name of event is here "><img src="{{asset('frontEnd/events')}}/images/small/4.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/5.jpg" rel="lightbox[album1]" title="Softness"><img src="{{asset('frontEnd/events')}}/images/small/5.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/6.jpg" rel="lightbox[album1]" title="Bliss"><img src="{{asset('frontEnd/events')}}/images/small/6.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/7.jpg" rel="lightbox[album1]" title="Adorable"><img src="{{asset('frontEnd/events')}}/images/small/7.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/8.jpg" rel="lightbox[album1]" title="Forever"><img src="{{asset('frontEnd/events')}}/images/small/8.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/9.jpg" rel="lightbox[album1]" title="Silence"><img src="{{asset('frontEnd/events')}}/images/small/9.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/10.jpg" rel="lightbox[album1]" title="Love"><img src="{{asset('frontEnd/events')}}/images/small/10.jpg" /></a></li>
						</ul>
					</div>
				</div>

				<div class="pb-wrapper pb-wrapper-2">
          <h3 class="pb-title">Managerial.</h3>

					<div class="pb-scroll">
						<ul class="pb-strip">
							<li><a href="{{asset('frontEnd/events')}}/images/large/11.jpg" rel="lightbox[album2]" title="Serenity"><img src="{{asset('frontEnd/events')}}/images/small/11.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/12.jpg" rel="lightbox[album2]" title="Color"><img src="{{asset('frontEnd/events')}}/images/small/12.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/13.jpg" rel="lightbox[album2]" title="Serendipity"><img src="{{asset('frontEnd/events')}}/images/small/13.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/14.jpg" rel="lightbox[album2]" title="Sunshine"><img src="{{asset('frontEnd/events')}}/images/small/14.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/15.jpg" rel="lightbox[album2]" title="Love"><img src="{{asset('frontEnd/events')}}/images/small/15.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/16.jpg" rel="lightbox[album2]" title="Friendship"><img src="{{asset('frontEnd/events')}}/images/small/16.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/17.jpg" rel="lightbox[album2]" title="Spring"><img src="{{asset('frontEnd/events')}}/images/small/17.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/18.jpg" rel="lightbox[album2]" title="Future"><img src="{{asset('frontEnd/events')}}/images/small/18.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/19.jpg" rel="lightbox[album2]" title="Summer"><img src="{{asset('frontEnd/events')}}/images/small/19.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/20.jpg" rel="lightbox[album2]" title="Lightness"><img src="{{asset('frontEnd/events')}}/images/small/20.jpg" /></a></li>
						</ul>
					</div>
				</div>

				<div class="pb-wrapper pb-wrapper-3">
          <h3 class="pb-title">Robotics</h3>

					<div class="pb-scroll">
						<ul class="pb-strip">
							<li><a href="{{asset('frontEnd/events')}}/images/large/20.jpg" rel="lightbox[album3]" title="Spring"><img src="{{asset('frontEnd/events')}}/images/small/20.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/10.jpg" rel="lightbox[album3]" title="Sunshine"><img src="{{asset('frontEnd/events')}}/images/small/10.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/9.jpg" rel="lightbox[album3]" title="Summer"><img src="{{asset('frontEnd/events')}}/images/small/9.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/19.jpg" rel="lightbox[album3]" title="Delicious"><img src="{{asset('frontEnd/events')}}/images/small/19.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/8.jpg" rel="lightbox[album3]" title="Softness"><img src="{{asset('frontEnd/events')}}/images/small/8.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/18.jpg" rel="lightbox[album3]" title="Bliss"><img src="{{asset('frontEnd/events')}}/images/small/18.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/4.jpg" rel="lightbox[album3]" title="Adorable"><img src="{{asset('frontEnd/events')}}/images/small/4.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/6.jpg" rel="lightbox[album3]" title="Forever"><img src="{{asset('frontEnd/events')}}/images/small/6.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/7.jpg" rel="lightbox[album3]" title="Silence"><img src="{{asset('frontEnd/events')}}/images/small/7.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/11.jpg" rel="lightbox[album3]" title="Love"><img src="{{asset('frontEnd/events')}}/images/small/11.jpg" /></a></li>
						</ul>
					</div>
				</div>

				<div class="pb-wrapper pb-wrapper-4">
          <h3 class="pb-title">Fun events</h3>
					<div class="pb-scroll">
						<ul class="pb-strip">
							<li><a href="{{asset('frontEnd/events')}}/images/large/18.jpg" rel="lightbox[album4]" title="Spring"><img src="{{asset('frontEnd/events')}}/images/small/18.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/16.jpg" rel="lightbox[album4]" title="Sunshine"><img src="{{asset('frontEnd/events')}}/images/small/16.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/8.jpg" rel="lightbox[album4]" title="Summer"><img src="{{asset('frontEnd/events')}}/images/small/8.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/18.jpg" rel="lightbox[album4]" title="Delicious"><img src="{{asset('frontEnd/events')}}/images/small/18.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/19.jpg" rel="lightbox[album4]" title="Softness"><img src="{{asset('frontEnd/events')}}/images/small/19.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/20.jpg" rel="lightbox[album4]" title="Bliss"><img src="{{asset('frontEnd/events')}}/images/small/20.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/1.jpg" rel="lightbox[album4]" title="Adorable"><img src="{{asset('frontEnd/events')}}/images/small/1.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/5.jpg" rel="lightbox[album4]" title="Forever"><img src="{{asset('frontEnd/events')}}/images/small/5.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/3.jpg" rel="lightbox[album4]" title="Silence"><img src="{{asset('frontEnd/events')}}/images/small/3.jpg" /></a></li>
							<li><a href="{{asset('frontEnd/events')}}/images/large/6.jpg" rel="lightbox[album4]" title="Love"><img src="{{asset('frontEnd/events')}}/images/small/6.jpg" /></a></li>
						</ul>
					</div>
				</div>

			</section>
        </div>
@endsection
@section('scripts')
   <script src="{{asset('frontEnd/events')}}/js/data.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src="{{asset('frontEnd/events')}}/js/lightbox.js"></script>
@endsection
