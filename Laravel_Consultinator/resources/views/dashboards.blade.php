<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{$LoggedUserInfo['name']}}</title>
		<!-- <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" >
		<noscript><link rel="stylesheet" href=" {{ asset('assets/css/noscript.css') }}" /></noscript>
    
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					

				<!-- Header -->
				

				<!-- Nav -->
					
			
				<!-- Main -->
					<div id="main">
					
						<!-- Featured Post -->
							<article class="post featured" style="margin-top:0;">
								<nav id="nav">
									<ul class="links">
										<li  class="active"><a href="/student">Available Schedules</a></li>
										<li><a href="/myRequests">My Requested Schedules</a></li>
										<li><a href="{{route('auth.logout')}}">Logout</a></li>
										
									</ul>
									
								</nav>
							
							</article>

						<!-- Posts -->
						
						{{-- <p style="color:white;">   This is where the students request for consultation are displayed.  You can view the details, accept the request, or deny it.</p>
					 --}}
					 <p style="color:white;margin-bottom:1.5em;">This is where the available schedule of instructors are displayed. Request ka ng consultation by clicking that button over there.</p>
					  <form action="searchh" method="post">
					  	@csrf
								<input type="text" name="insnem" placeholder="Search for a teacher/instructor">
								<input type="submit" value="search" style="margin-top:1.5em;margin-bottom:1.5em;" >
								<a href="/student" class="button" style="margin-bottom:1.5em;margin-bottom:1.5em;">Reset Search</a>
							</form>
								
						<section class="posts">
                           
							@foreach($avail as $available)
							<article>
								<header>
									<span class="date">Instructor</span>
									<h2><a href="#">{{$available['instructor_id']}}</a></h2>
								</header>
								<br>
								<span class="date">Available on</span>
								<h1>{{$available['day']}}</h1>
								<h2>{{$available['part_of_the_day']}}</h2>
								<p style="text-align:center;">Available Time: {{$available['time']}}</p>
								<ul class="actions special">
									@if($available->available=='yes')
									
									<li><a href={{"request/".$available['id']}} class="button">Request for a consultation</a></li>
									@else
									<h3 style="color:rgb(184, 47, 47);">This schedule is currently unavailable</h3>
									@endif
								</ul>
							</article>
							@endforeach
								
							
							</section>
							<div>
								
							</div>
							<footer>
							
								
								{{$avail->links()}}
								
							
						</footer>
						<!-- Footer -->
							
					</div>

				<!-- Footer -->
				
				<!-- Copyright -->
                <!-- <div id="copyright">
                    <ul><li></li></ul>
                </div> -->

			</div>

		<!-- Scripts -->
			
            <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
			<script type="text/javascript" src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script type="text/javascript" src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/util.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
			

	</body>
</html>
