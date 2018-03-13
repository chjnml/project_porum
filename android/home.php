<!DOCTYPE html>
<html>
<head>
	<title>PorumOverflow - Tulongan tayo!</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/logo.png">
	<link rel="stylesheet" href="dist/font-awesome/css/font-awesome.css">	
	<link rel="stylesheet" href="dist/local.css">
	<link rel="stylesheet" href="dist/bootstrap-3.3.7-dist/css/bootstrap.css">
	<script src="dist/bootstrap-3.3.7-dist/js/jquery.min.js"></script>
	<script src="dist/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	

</head>
<body>
	<div class="mobile-header">
		<img src="images/porum_logo.png">
	</div>
	<ul class="mobile-nav">
		<li class="mobile-nav-list"><a href="#" onclick="openNav()"><span class="fa fa-navicon"></span></a></li>
		<li class="mobile-nav-list active"><a href="#"><span class="fa fa-newspaper-o"></span></a></li>
		<li class="mobile-nav-list"><a href="#"><span class="fa fa-plus-circle"></span></a></li>
		<li class="mobile-nav-list"><a href="#"><span class="fa fa-gear"></span></a></li>
	</ul>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="#">Profile</a>
		<a href="#">Contact</a>
	</div>

	<div class="container-fluid">
		<div class="media-wrapper">
			<div class="media">
				<div class="media-left">
					<img src="images/User.png" class="media-object img-circle" style="width:20px">					
				</div>
				<div class="media-body">
					<div class="media-heading">
						<small>
							<a href="#" class="text-muted">Saket Kumar</a> upvoted this · 
							<a href="#"  class="text-muted">Just now</a>
						</small>
					</div>
					<p class="questions">Why don't billionaires sell their stakes and live the rest of their lives with so much more money instead of them working? Isn't time the most valuable thing we have?					
					</p>
					<button class="btn btn-default">Answer</button>	
					<div class="media-left">
						<img src="images/User.png" class="media-object img-circle" style="width:40px">					
					</div>
					<div class="media-body">
						<div class="media-heading">
							<h5>
								<a href="#" class="text-muted"><strong class="black">Cheenee Bico, Knows batman.</strong></a>
								<small class="text-muted">Answered 51 mins ago</small>
							</h5>
							<p>Hanging out with guys like Ali O. AlShamsi I realized that they got to be billionaires by solving problems and being driven and committed to helping others. He doesn’t do it for the money, he does it because he is one of the only people on the planet who can do what he does. The great thing about Ali is that you could take all his money away. Give him $100 and within no time he would be back to $1B. Believe me, from what I know he does enjoy the money, but he enjoyed the other things that life has to offer that are more important than money… like good friends and midnight runs for ice cream in NYC. :) I love ya bro!</p>							
							<button class="btn btn-xs">Upvote | 2.5k</button>
							<button class="btn-link btn-xs">Downvote</button>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="images/User.png" class="media-object img-circle" style="width:20px">					
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h5>
										<a href="#" class="text-muted"><strong class="black">Mitchell Tsai</strong></a>
										<small class="text-muted">Sun</small>
									</h5>
									<p class="answer">One business coach said that “being able to make wealth from nothing” provided him a feeling of security.

										He didn’t like being poor, but having made millions, gone broke, and made millions again…he wasn’t afraid of being poor.

										———
										Many middle-class & wealthy people are deathly afraid of being without money.

										Middle-class people sometimes can’t imaging how they would look for a job without (a) a place to live for 6–12 months (b) a car (c) money to pay expenses for the 6–12 months.

										When I was staying in a hostel in London, a girl from the countryside had come to the big city with only 200 pounds (about $400 at the time), to find a job an place to live. If she failed, she would have to go home.

										At the time, I was more middle-class & had not much experience with working-class/homeless people who go broke 10 times a month, so going to NYC with only $400 would have scared the pants off me… I was REALLY impressed with the English country girl.
										——
										Into the upper-middle and various levels of “upper class” or HNWI there are social and family connections (which may not break if you go bankrupt), but sometimes there is also embarrassment.

										Some wealthy people who have many high-level corporate & company skills have not the experience to do a startup from ground zero (with no outside capital, and $100) …using zero connections (e.g. say you became a social pariah, and for some reason your extended family refused to help).
										——
									Bharatwaj Ganesamurthy suggested that I post this comment as an answer.</p>							
									<button class="btn btn-xs">Upvote | 146k</button>
									<button class="btn-link btn-xs">Downvote</button>
								</div>						
							</div>
						</div>						
					</div>

				</div>


			</div>			
		</div>
		


	</div>



</body>
</html>

<script type="text/javascript">

	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";

	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft= "0";

	}

</script>