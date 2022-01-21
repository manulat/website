<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{$LoggedUserInfo['name']}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
							<article class="post featured" style="margin-top:center;">
								<nav id="nav">
									<ul class="links">
										<li class="active"><a href="Instructor">Student Requests</a></li>
										<li><a href="mySchedules">My available schedules</a></li>
										<li><a href="{{route('auth.logout')}}">Logout</a></li>
										
									</ul>
									
								</nav>
								
							</article>

						<!-- Posts -->
						
					
					  <p style="color:white;margin-bottom:1.5em;">This is where requests for consultation are displayed.  You can view the details, accept the request, or deny it. </p>
						<section class="posts">
                            
									@foreach($req as $reqq)
							<article>
								<header>
									<span class="date">Request From</span>
									<h2><a href="#">{{$reqq['student_name']}}</a></h2>
								</header>
								<br>
								<span class="date">Requesting for consultation on:</span>
								<h1>{{$reqq['day']}} {{$reqq['part_of_the_day']}} {{$reqq['time']}}</h1>
								<h2 ></h2>
								<h2 style="text-align:center;"> </h2>
								<span class="date">Subject:</span>
								<h4 style="text-align:center;"> {{$reqq['subject']}}</h4>
								<span class="date">Meeting Place:</span>
								<h4 style="text-align:center;"> {{$reqq['meeting_place']}}</h4>
								<span class="date">Message:</span>
								<h4 style="text-align:center;"> {{$reqq['message']}}</h4>
								
								@if($reqq->status=='accepted')
								<span class="date">Status:</span>
								<h2 style="text-align:center;color:green;"> {{$reqq['status']}}</h2>
								<span class="date">You can now meet with the students and conduct the consultation.</span>
								<ul class="actions special">
								<li><a href={{"consultdone/".$reqq['id']."/".$reqq['avail_id']}} class="button" >Mark as done</a></li>
								<li><a href={{"cancelreq/".$reqq['id']."/".$reqq['avail_id']}} class="button">Cancel</a></li>
								</ul>
								@elseif($reqq->status=='rejected')
								<span class="date">Status:</span>
								<h3 style="text-align:center;color:rgb(161, 37, 37);"> {{$reqq['status']}}</h3>
									<ul class="actions special">
								<li><a href={{"cancelrej/".$reqq['id']}} class="button">undo</a></li>
									<li><a href={{"deletereq/".$reqq['id']}} class="button">Delete this request</a></li>
								</ul>
								@elseif($reqq->status=='consultation done')
								<h3 style="text-align:center;color:#278f24;"> {{$reqq['status']}}</h3>
								<a href={{"deletereq/".$reqq['id']}} class="button">Delete record</a>
								@else
								<span class="date">Status:</span>
								<h3 style="text-align:center;color:#c112c7;"> {{$reqq['status']}}</h3>
								<ul class="actions special">
									<li><a href={{"updatereq/".$reqq['id']."/".$reqq['avail_id']}} class="button">Accept</a></li>
									<li><a href={{"rejectreq/".$reqq['id']}} class="button">Reject</a></li>
								</ul>	
								@endif
								
							</article>
							@endforeach
						
							</section>
							
								{{ $req->links() }}
								
							
						<!-- Footer -->
							
					</div>

				<!-- Footer -->
				
				<!-- Copyright -->
					<!-- <div id="copyright">
						<ul><li>&copy; </li></ul>
					</div> -->

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<input type="text" name="usertype" value="{{$LoggedUserInfo['usertype']}}">
<table>
    <thead>
        <th>Hello</th>
    </thead>
   <tbody>
       <tr>  
   
       <td>{{$LoggedUserInfo['name']}}</td>
       <td>{{$LoggedUserInfo['email']}}</td>
       <td><a href="{{route('auth.logout')}}">logout</a></td>
       </tr>
   </tbody>
</table>



<table border="2">
    <tr>
        <td>row id</td>
        <td>instructor id</td>
        <td>Available Day</td>
        <td>Part of the day</td>
        <td>Time</td>
    </tr>
   @foreach($avail as $available)
   
   <tr>
    <td>{{$available['id']}}</td>
    <td>{{$available['instructor_id']}}</td>
    <td>{{$available['day']}}</td>
    <td>{{$available['part_of_the_day']}}</td>
    <td>{{$available['time']}}</td>
    <td>
        <a href={{"delete/".$available['id']}}>DELETE</a>
        <a href={{"edit/".$available['id']}}>EDIT</a>
    </td>
   
</tr>

   @endforeach
   <a href="/add">add</a>
</table>
</body>
</html> --}}