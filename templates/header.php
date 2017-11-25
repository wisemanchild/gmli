<?php 
//Turn on output buffering 
ob_start();
?>
<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="HandheldFriendly" content="True">

  <title><?php
	  if (defined('TITLE')) {
		  print TITLE;
	  } else 
	  {
		print 'Raise High the Roof Beam! A J.D. Salinger Fan Club';
	  }
	  ?>
	  </title>

	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" href="css/concise.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/masthead.css" />

</head>

<body>



<header container class="siteHeader">

  <div row>

    <h1 column="4" class="logo"><a href="index.php">Raise High the Roof Beam!</a></h1>
<?php include_once('nav.php')  ?>

  </div>

</header>

<main container class="siteContent">
