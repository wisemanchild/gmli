<!doctype html>

<html lang="en-US">

<!--
Assignment: final project
Author: Norman McWilliams	
Date: 11-16-2017
Filename: index.php
Description: norlab business solutions company website
Comments: site home page
-->

<head>
<meta charset="utf-8">
<meta name="description" content="main section of the Norlab Business Solution website project">
<meta name="keywords" content="Life, Health, Strength, Wealth, Wisdom, Power, Love, Spritual">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Norlab Business Solutions Home Page</title>


<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->

<script>
	var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript">
	
	</script>


<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<link href="css/nshift360gmli_lib.css" rel="stylesheet" type="text/css">

/* nlm-11-25-2017 begin style section */
	<style>	
	
	
 .banner {
	background-color: #2D9AB7;
	background-image: url(images/parallax_teacher-helping-mature-students-in-library.png);
	height: 400px;
	background-attachment: fixed;
	background-size: cover;
	background-repeat: no-repeat;
	
}

/* nlm-11-25-2017  position is relative and width is 100% because the video is contained in a container class that has a 90% width */
#myVideo {
    position: relative;
    right: 0;
    bottom: 0;
	top: 0;
    width: 100%; 
    height: 100%;
}	
	.content {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 90%;
    padding: 0px;
}
	@import url('https://fonts.googleapis.com/css?family=Anton|Playfair+Display+SC:700i');
	h1, h2, h3, h4, h5, h6 {font-family: 'Playfair Display SC', serif;}
	p {font-family: 'Anton', sans-serif;}
	
</style>

</head>

<body>

<!-- Main Container -->
 <!-- Navigation --> 
<div class="container"> 
  
<!-- nlm-11-25-2017 logo dimensions are too large for current size of navbar -->
  <header title="Life Courses"> <a href="index.html"> <img src="images/logo.png" width="100" height="100" alt="Norlab Logo"/> </a> 
    
    <!-- nlm-11-25-2017 being replaced with php include file -->
    
    <nav>
      <ul>
        <li><a href="#hero">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li> <a href="#contact">CONTACT</a></li>
        <li> <a href="pages/life.html">LIFE</a></li>
        <li> <a href="pages/health.html">HEALTH</a></li>
        <li> <a href="pages/strength.html">STRENGTH</a></li>
        <li> <a href="pages/wealth.html">WEALTH</a></li>
        <li> <a href="pages/wisdom.html">WISDOM</a></li>
      </ul>
    </nav>
  </header>
  
  <!-- Hero Section -->
  
  <section class="hero" id="hero">
	<a href="#about"><video id="myVideo"  muted="muted" autoplay="autoplay" loop="loop" >
      <source src="images/videoblocks-oregon-coast-rainbow-and-dramatic-cloud-sound_rmtcih9iu__D.mp4" type="video/mp4">
      your browser doesn't support </video></a>

<!-- nlm-11-25-2017 need to find a better way of rapping content inside the video -->
<div class="content">
  <h1>Norlab Business Solutions</h1>
 <h2>Send it to the lab...</h2>
	<p>Quotation goes here...</p>

</div>
  </section>
  
  <!-- About Section -->
  
  <section class="about" id="about">
    <h2 class="hidden">About</h2>
  </section>
  
  <!-- Parallax Section -->
  
  <section class="banner" title="Grace And Mercy Learning Institute">
    <h2 class="parallax">GRACE AND MERCY LEARNING INSTITUTE</h2>
    <p class="parallax_description">The Grace and Mercy Training Institute is a subsidiary of Norlab Business Solutions that has a three tier train approach for three generations of people. <br>
      more...</p>
    <p class="parallax_description">&nbsp;</p>
  </section>
 
	<main class="main-article">
  	<h2>Welcome to the Institute Page</h2>
  	<p>Welcome to the Grace and Mercy Institute Website.  We are a non-profit organization specizing in working with people who are interested in making changes to this world that will make a difference for what people think about and what they care about.
  	The philosopy of the Institute is to deal with the six main topic that are daily challenges for all of us.
  	</p>
  	<h2>Life</h2>
  	<p>We provide resources and solutions and discussions regarding the lives of human beings on this earth</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi maiores molestias beatae voluptatibus perferendis voluptas totam id quasi ad qui!</p>
  	<h2>Health</h2>
  	<p>Resources and solutions and discussions regarding individual, group and general resources for a better quality of life...</p>
  	<h2>Stength</h2>
  	<p>Resources solutions and discussions regarding spiritual physical and mental endurance to assist in the transformation</p>
    <h2>Wealth</h2>
    <p>Wealth is not just the acquisition of money there's also the possibility of not thinking about money and working towards </p>
    <h2>Wisdom</h2>
    <p>Resources, solutions and discussions regarding the concepts of knowledge and wisdom</p>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit consequuntur temporibus accusantium sunt rerum perferendis sed voluptatum quos asperiores, atque harum numquam tenetur repellat commodi consequatur neque non. Dolorum voluptatum sed vel laborum explicabo minus, vero aspernatur similique nobis, eveniet iste eum enim saepe accusamus quas. Aliquam maxime quaerat, adipisci!</p>
    
  	
</main>
	
  <!-- More Info Section -->
  
  <footer>
    <article class="footer_column">
      <h3><a href="pages/life.html">LIFE</a></h3>
      <img src="images/placeholder.jpg" alt="" width="400" height="200" class="cards"/>
      <p>We provide resources and solutions and discussions regarding the lives of human beings on this earth</p>
      <p>more...</p>
    </article>
    <article class="footer_column">
      <h3><a href="pages/health.html">HEALTH</a></h3>
      <img src="images/placeholder.jpg" alt="" width="400" height="200" class="cards"/>
      <p>Resources and solutions and discussions regarding individual, group and general resources for a better quality of life...</p>
      <p>more...</p>
    </article>
    <article class="footer_column">
      <h3><a href="#">STRENGTH</a></h3>
      <img src="images/placeholder.jpg" alt="" width="400" height="200" class="cards"/>
      <p>Resources solutions and discussions regarding spiritual physical and mental endurance to assist in the transformation </p>
      <p>more...</p>
    </article>
    <article class="footer_column">
      <h3><a href="#">WEALTH</a></h3>
      <img src="images/placeholder.jpg" alt="" width="400" height="200" class="cards"/>
      <p> Wealth is not just the acquisition of money there's also the possibility of not thinking about money and working towards </p>
		
      <p>more...</p>
    </article>
    <article class="footer_column">
      <h3><a href="#">WISDOM</a></h3>
      <img src="images/placeholder.jpg" alt="" width="400" height="200" class="cards"/>
      <p>resources, solutions and discussions regarding the concepts of knowledge and wisdom</p>
      <p>.more...</p>

    </article>
    <article class="footer_column">
      <h3><a href="#">WHAT'S NEW</h3>
      <img src="images/placeholder.jpg" alt="" width="400" height="200" class="cards"/>
      <p>resources, solutions and discussions regarding the concepts of knowledge and wisdom</p>
      <p>.more...</p>
    </article>

  </footer>
  
  <!-- Footer Section --> 
  
  <!-- footer menu -->
  <section class="footer_banner" id="contact">
     <h6>Please visit us soon</h6>
    <!-- Copyrights Section --> 
    <div class="copyright">&copy;2017 -<strong>Norlab Business Solutions</strong></div>
  </section>
  
  <!-- Main Container Ends --> 
  
</div>
</body>
</html>