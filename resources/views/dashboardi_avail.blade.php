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
					

				<!-
					
			
				<!-- Main -->
					<div id="main">
		
						<!-- Featured Post -->
							<article class="post featured" style="margin-top:0;">
								<nav id="nav">
									<ul class="links">
										<li ><a href="/Instructor">Students Request</a></li>
										<li class="active"><a href="mySchedules">My available schedules</a></li>
										<li><a href="{{route('auth.logout')}}">Logout</a></li>
										
									</ul>
									
								</nav>
								
							</article>

						<!-- Posts -->
						
						{{-- <p style="color:white;">   This is where the students request for consultation are displayed.  You can view the details, accept the request, or deny it.</p>
					 --}}
						

						<!-- Footer -->
						
						<div style="color:white;">
							<p>This is the list of your available schedules that the students can view </p>
							<a href="/add" style="background: #e0e0e0;padding-top:.4em;padding-bottom:.4em;margin-bottom:1em;padding-left:2em;padding-right:2em;border: 1px solid rgba(0, 0, 0, 0.0);box-shadow:  5px 5px 10px #6c6c6c,
							-5px -5px 10px #ffffff;border-radius: 50px;">Add</a> <br>

							
							
							
							<table border="2" style="margin-top:1em;">
								
								<tr>
								
									
									<td>Available Day</td>
									<td>Part of the day</td>
									<td>Time</td>
								</tr>
							   @foreach($avail as $available)
							   
							   <tr>
							
								
								<td>{{$available['day']}}</td>
								<td>{{$available['part_of_the_day']}}</td>
								<td>{{$available['time']}}</td>
								<td>
									<a href={{"delete/".$available['id']}}>DELETE</a>
									<a href={{"edit/".$available['id']}} id="myBtn">EDIT</a>
									
								</td>
							   
							</tr>
							
							   @endforeach
							  
							</table>
							
							{{ $avail->links() }}
							
                        </div>	
					</div>

				<!-- Footer -->
				
				<!-- Copyright -->
				
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