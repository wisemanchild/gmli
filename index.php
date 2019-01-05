<!doctype html>

<html lang="en">
<meta charset="utf-8">
<?php

/*-- PHP FILE INFO -------------------------------------------------------------
 *  Application: WEBD168 Final css project
 *  Description: main page on the gmli website
 *    File Name: health_new.php
 *       Author: Norman McWilliams     Tester:
 * Date created: 12-03-2017            Date updated: 01-05-2019
 * Time created: 8:35pm          Time updated: 5:12am
 *    Revision: 1.7
 *    Copyright: (c) 2017 Norlab Business Solutions
 *----------------------------------------------------------------------------- */
?>

<head>

    <meta name="description" content="main section of the Norlab Business Solution website project">
    <meta name="keywords" content="Life, Health, Strength, Wealth, Wisdom, Power, Love, Spritual">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grace and Mercy Institute Home Page</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
    <link href="css/nshift360gmli_lib.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="images/logo.png"/>

    <!-- Section to repair broker glyphicons-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	-->

</head>

<body>

<header class="center-block" title="Grace and Mercy Institute Home Page">
	<?php include_once 'includes/header.php'; ?>
</header>

<!-- nlm-11-25-2017 logo dimensions are too large for current size of navbar -->


<!-- Hero Section -->

<section class="hero container-fluid" id="hero">
    <!--   <h1 class="hero_header">Norlab Business <span class="light">Solutions</span></h1>
	   <p class="tagline">Send it to the Lab!</p>

	   <video id="myVideo" onended="videoEnded" width="100%" height="100%" autoplay>
		   <source src="video/logo_video.mp4" type="video/mp4">
		   your browser doesn't support
	   </video>

	   <script>

	   </script>

	   <h1 class="hero_header"><a href="#about"> <span class="glyphicon glyphicon-triangle-bottom"></span></a></h1>

   --></section>


<!-- About Section -->

<!--
<section class="about" id="about">
</section>
-->

<!-- Parallax Section -->


<section class="banner" title="Grace And Mercy Learning Institute">
    <h2 class="parallax">GRACE AND MERCY LEARNING INSTITUTE</h2>
    <p class="parallax_description">The Grace and Mercy Training Institute is a subsidiary of Norlab Business Solutions
        that has a three tier train approach for three generations of people. <br> more...
    </p>

    <p class="parallax_description">&nbsp;</p>
</section>


<main class="main-article" id="about">

    <h2>Welcome to the Institute Page</h2>

    <p>Welcome to the Grace and Mercy Institute Website. We are a non-profit organization specizing in working with
        people who are interested in making changes to this world that will make a difference for what people think
        about and what they care about. The philosopy of the Institute is to deal with the six main topic that are daily
        challenges for all of us.
    </p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quae repellendus! Dolore quas magni omnis
        incidunt voluptatum natus blanditiis dolorem eligendi, consequuntur? Voluptatum in esse accusamus aspernatur
        amet saepe vel, aliquid aliquam enim. Eveniet adipisci, officiis ullam fugiat tempora sunt, voluptatibus atque
        accusantium ad, cum commodi, doloremque quasi laboriosam quis!
    </p>
<!--    <blockquote>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident odit ea facilis nihil!
        Reprehenderit ipsum possimus odio corporis labore veniam sed sint rem eius porro, minima voluptatibus quasi
        exercitationem alias delectus dolorum at error architecto soluta quas esse, eum. Quos deserunt quod
        molestiae ea distinctio cum, tenetur dicta harum debitis itaque suscipit quidem facilis ducimus, saepe vel
        facere quo quibusdam officiis repudiandae possimus, earum excepturi iusto, nemo ut dolore? Iure eaque, rem
        optio aspernatur!
    </blockquote>
-->
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, omnis porro cumque animi nihil nulla
         obcaecati, at, corporis tempora nobis dolorem minima! Dignissimos, molestiae, pariatur.
    </p>

    <h2 title="life"><a href="life_new.php" class="glyphicon glyphicon-link">Life Courses</a></h2>

    <p>We provide resources and solutions and discussions regarding the lives of human beings on this earth</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi maiores molestias beatae voluptatibus
        perferendis voluptas totam id quasi ad qui!
    </p>


    <h2 title="health"><a href="health_new.php" class="glyphicon glyphicon-link">Health Courses</a></h2>

    <p>Resources and solutions and discussions regarding individual, group and general resources for a better quality of
        life...</p>


    <h2 title="strength"><a href="strength_new.php" class="glyphicon glyphicon-link">Stength </a></h2>

    <p>Resources solutions and discussions regarding spiritual physical and mental endurance to assist in the
        transformation</p>


    <h2 title="wealth"><a href="wealth_new.php" class="glyphicon glyphicon-link">Wealth</a></h2>

    <p>Wealth is not just the acquisition of money there's also the possibility of not thinking about money and working
        towards </p>


    <h2 title="wisdom"><a href="wisdom_new.php" class="glyphicon glyphicon-link">Wisdom</a></h2>

    <p>Resources, solutions and discussions regarding the concepts of knowledge and wisdom</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit consequuntur temporibus accusantium sunt rerum
        perferendis sed voluptatum quos asperiores, atque harum numquam tenetur repellat commodi consequatur neque non.
        Dolorum voluptatum sed vel laborum explicabo minus, vero aspernatur similique nobis, eveniet iste eum enim saepe
        accusamus quas. Aliquam maxime quaerat, adipisci!</p>


</main>


<!-- More Info Section -->


<?php include_once 'includes/catagories.php'; ?>

<!-- Footer Section -->

<?php include_once 'includes/footer.php'; ?>

<!-- footer menu -->

<!-- Main Container Ends -->

<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.1.3.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

<script>
    /*
    *   remove the spashscreen video and hero title display
    *   TODO: need to find a way to reduce the wait time on vid.style.display ended event
    */
/*

    function videoEnded() {
        var vid = document.getElementById("myVideo");
        var hero = document.getElementById("hero");
        console.log("got the element");
        vid.style.display = "none";
        hero.style.display = "none";
    }


    function endOfSpashVideo() {
        var vid = document.getElementById("myVideo");
        if vid.played.end >
            alert("Start: " + vid.played.start(0) + " End: " + vid.played.end(0));
        alert("Video is ended")
        alert( < br > +
        var .
        played.end
    )

*/

</script>

</body>

</html>