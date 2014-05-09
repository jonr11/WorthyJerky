<?
session_start();
// This will grant each page access to all of the utility and error processing functions
require 'utils.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Worthy Jerky</title>
		<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style/stylesheet.css">

		<!--Link to JQuery-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
        </script>
		<!--Link to local Java file-->
		<script src="Index_Java.js"></script>
	</head>
	<body>
		<nav>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
			<ul class="nav">
				<li class="nav"><a href="index.php" class="nav">HOME</a></li>
				<li class="nav"><a href="jerky.php" class="nav">THE JERKY</a></li>
				<li class="nav"><a href="about.php" class="nav">ABOUT US</a></li>
				<li class="nav"><a href="shop.php" class="nav">SHOP</a></li>
				<li class="nav">|  </li>
				<li class="nav">
					
						<input type="hidden" class="cart" name="cmd" value="_s-xclick">
						<input type="hidden" class="cart" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
						">
						<input type="image" class="cart" src="images/sc3" border="0" width="40" height="40" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					
				</li>
				<li class="nav"><a href="cart.php" class="nav">CART</a></li>

				<?php 
		            if ( ! isset( $_POST['username'] ) && ! isset( $_POST['password'] ) ) {

		            	//TODO: clear the username and password global variables
				?>
					<li class="nav"><a href="login.php" class="nav">LOGOUT</a></li>
				<?php } ?>
					
				<?php
				else{ 
				?>

				<li class="nav"><a href="login.php" class="nav">LOGIN</a></li>
				<?php } ?>

				<?php 
		            if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {

		            	//TODO: clear the username and password global variables
				?>
					<li class="nav"><a href="login.php" class="nav">LOGOUT</a></li>
				<?php } ?>
			</ul>
</form>
		</nav>

<div class="Slideshow">
    
	<figure class="show">
		<img src="images/main6.jpg" width="100%" />
        
	</figure>
    
  <figure>
    <img src="images/main2.JPG" width="100%" top="-170px"/>
	</figure>
  
    <figure>
		<img src="images/main7.jpg" width="100%" />
	</figure>
  
    <figure>
		<img src="images/DSC_0380.JPG" width="100%" />
	</figure>
    
  <span class="prev">&#10092;</span>
  <span class="next">&#10093;</span>
</div>  

<img class="WJLOGO" src="images/logo.jpeg" alt="logo">

<div class="body_adjust">