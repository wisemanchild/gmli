<!doctype html>
<html><!-- InstanceBegin template="/Templates/gmli_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<meta charset="utf-8">
<!-- InstanceBeginEditable name="info" -->	
<?php

/*-- PHP FILE INFO -------------------------------------------------------------
 *  Application: WEBD168 Final css project
 *  Description: main page on the gmli website
 *    File Name: whats_new.php
 *       Author: Norman McWilliams     Tester:
 * Date created: 12-03-2017            Date updated: 01-03-2019
 * Time created: 8:35pm          Time updated: 5:12am
 *    Revisions: 1.6
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
	<link href="css/nshift360gmli_lib.css" rel="stylesheet" type="text/css">

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
	</section>

	<!-- About Section -->

	<section class="about" id="about">
		<h2 class="hidden">About</h2>
	</section>

	<!-- Parallax Section -->

	<section class="banner" title="What's New at the Institute?">
		<h2 class="parallax">WHAT'S NEW AT THE INSTITUTE</h2>
		<p class="parallax_description">The Grace and Mercy Training Institute is a subsidiary of Norlab Business Solutions that has a three tier train approach for three generations of people. <br> more...
		</p>
		<p class="parallax_description">&nbsp;</p>
	</section>

	<main class="main-article">
		<h2>What's New at the Institute</h2>
		<p>Welcome to the Grace and Mercy Institute Website. We are a non-profit organization specizing in working with people who are interested in making changes to this world that will make a difference for what people think about and what they care about. The philosopy of the Institute is to deal with the six main topic that are daily challenges for all of us.
		</p>

	</main>

	<!-- More Info Section -->

	<?php include_once('includes/catagories.php'); ?>
	<!-- Footer Section -->
	<?php include_once('includes/footer.php'); ?>
	<!-- footer menu -->
	<!-- Main Container Ends -->


</body>

</html>