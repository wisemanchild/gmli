<!doctype html>
<html><!-- InstanceBegin template="/Templates/gmli_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<meta charset="utf-8">
<!-- InstanceBeginEditable name="info" -->	
<?php

/*-- PHP FILE INFO -------------------------------------------------------------
 *  Application: WEBD168 Final css project
 *  Description: main page on the gmli website
 *    File Name: health_new.php
 *       Author: Norman McWilliams     Tester:
 * Date created: 12-03-2017            Date updated: 12-12-2017
 * Time created: 8:35pm          Time updated: 5:12am
 *    Revisions: 1.5
 *    Copyright: (c) 2017 Norlab Business Solutions
 *----------------------------------------------------------------------------- */
?>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" --> 
<head>
	<meta name="description" content="main section of the Norlab Business Solution website project">
	<meta name="keywords" content="Life, Health, Strength, Wealth, Wisdom, Power, Love, Spritual">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Grace and Mercy Institute Home Page</title>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">	
<!--	<link href="css/nshift360gmli_lib.css" rel="stylesheet" type="text/css">-->
	<link href="css/gmli_lib.css" type="text/css" rel="stylesheet">
	<style>
		<!--
		/* nlm-11-25-2017 begin style section */
		
		.banner {
			background-color: #2D9AB7;
			background-image: url(images/parallax_teacher-helping-mature-students-in-library.png);
			height: 400px;
			background-attachment: abolute;
			background-size: cover;
			background-repeat: no-repeat;
			
		}
		/* nlm-11-25-2017  position is relative and width is 100% because the video is contained in a container class that has a 90% width */

		#myVideo {
			position:relative;
			right: 0;
			bottom: 0;
			top: 100;
			width: 100%;
			height: 100%;
		}

		.content {
			position: relative;
			bottom: 0;
			background: rgba(0, 0, 0, 1.0);
			color: #f1f1f1;
			width: 90%;
			padding: 0px;
		}
		
		@import url('https://fonts.googleapis.com/css?family=Anton|Playfair+Display+SC:700i');
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: 'Playfair Display SC', serif;
		}
		p {
			font-family: 'Anton', sans-serif;
		}
	#header	nav {
	background-color: green;
	}
		main h2 {
			font-size: 3em;
		}
		.hero_header a {
			color: white;
			font-size: 2em;
		}
		
		quote {
			font-family: cursive;
			color: green;
			margin: 150px;
			padding: 50px;
			text-align: center;
		}
		
		p::first-letter {
			font-size: 1.5em;
		}
	</style>

</head>

<body>


	<!-- Main Container -->
	<!-- Navigation -->
	<header class="center-block">
	<?php include_once('includes/header.php') ?>
	</header>
	<!-- nlm-11-25-2017 logo dimensions are too large for current size of navbar -->

	<!-- Hero Section -->
	
	<section class="hero" id="hero">
    <h1 class="hero_header"><a href="#about"> <span class="glyphicon glyphicon-triangle-bottom"></span></a></h1>
		<!-- nlm-11-25-2017 need to find a better way of rapping content inside the video -->
<div class="row">
<!--<video autoplay muted loop id="myVideo">
  <source src="video/logo_video.mp4" type="video/mp4" >
  Your browser does not support HTML5 video.
</video>
-->	</div>		
	
<!--<div class="section">
  <h1>Heading</h1>
  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
  <button id="myBtn" onclick="myFunction()">Pause</button>
</div>-->

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

	</section>

	<!-- About Section -->

	<section class="about" id="about">
		<h2 class="hidden">About</h2>
	</section>

	<!-- Parallax Section -->

	<section class="banner" title="Grace And Mercy Learning Institute">
		<h2 class="parallax">GRACE AND MERCY LEARNING INSTITUTE</h2>
		<p class="parallax_description">The Grace and Mercy Training Institute is a subsidiary of Norlab Business Solutions that has a three tier train approach for three generations of people. <br> more...
		</p>
		<p class="parallax_description">&nbsp;</p>
	</section>

	<main class="main-article">
		<h2>Welcome to the Institute Page</h2>
		<p>Welcome to the Grace and Mercy Institute Website. We are a non-profit organization specizing in working with people who are interested in making changes to this world that will make a difference for what people think about and what they care about. The philosopy of the Institute is to deal with the six main topic that are daily challenges for all of us.
		<p>These six main topics are: Life, Health, Strength, Wealth, and Wisdom. &nbsp;We deal with these topics everyday. &nbsp;Not necessarily in this order but do deal with them</p>
		<p>        
		<p>            
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident odit ea facilis nihil! Reprehenderit ipsum possimus odio corporis labore veniam sed sint rem eius porro, minima voluptatibus quasi exercitationem alias delectus dolorum at error architecto soluta quas esse, eum. Quos deserunt quod molestiae ea distinctio cum, tenetur dicta harum debitis itaque suscipit quidem facilis ducimus, saepe vel facere quo quibusdam officiis repudiandae possimus, earum excepturi iusto, nemo ut dolore? Iure eaque, rem optio aspernatur!</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, omnis porro cumque animi nihil nulla obcaecati, at, corporis tempora nobis dolorem minima! Dignissimos, molestiae, pariatur.</p>
		</p>
		<h2 title="life"><a href="life_new.php" class= "glyphicon glyphicon-link glyphicon small">Life Courses</a></h2>
		<p>We provide resources and solutions and discussions regarding the lives of human beings on this earth</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi maiores molestias beatae voluptatibus perferendis voluptas totam id quasi ad qui!</p>
		
		<h2 title="health"><a href="health_new.php" class= "glyphicon glyphicon-link">Health Courses</a></h2>
		<p>Resources and solutions and discussions regarding individual, group and general resources for a better quality of life...</p>
		
		<h2 title="strength"><a href="strength_new.php" class= "glyphicon glyphicon-link">Stength </a></h2>
		<p>Resources solutions and discussions regarding spiritual physical and mental endurance to assist in the transformation</p>
			
		<h2 title="wealth"><a href="wealth_new.php" class= "glyphicon glyphicon-link">Wealth</a></h2>
		<p>Wealth is not just the acquisition of money there's also the possibility of not thinking about money and working towards </p>
		
		<h2 title="wisdom"><a href="wisdom_new.php" class= "glyphicon glyphicon-link">Wisdom</a></h2>
		<p>Resources, solutions and discussions regarding the concepts of knowledge and wisdom</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit consequuntur temporibus accusantium sunt rerum perferendis sed voluptatum quos asperiores, atque harum numquam tenetur repellat commodi consequatur neque non. Dolorum voluptatum sed vel laborum explicabo minus, vero aspernatur similique nobis, eveniet iste eum enim saepe accusamus quas. Aliquam maxime quaerat, adipisci!</p>


	</main>

	<!-- More Info Section -->

	<?php include_once('includes/catagories.php'); ?>
	<!-- Footer Section -->
	<?php include_once('includes/footer.php'); ?>
	<!-- footer menu -->
	<!-- Main Container Ends -->


</body>

</html>