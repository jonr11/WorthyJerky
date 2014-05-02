<?php
/*
// This is file will contain code necessary for multiple pages.  This includes...

// Check if user logged out
session_start(); 
if(isset($_POST['logout'])) {
    if (isset($_SESSION['user'])) {
      unset($_SESSION['user']);
    }
}

// Setting up server
require_once 'config.php';
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->errno) {
    print($mysqli->error);
    exit();
}

// give the page access to all error processing functions
include 'error.php';

// Adding a picture to the server
function addPicture(file)
{
	$photo = sanitize($_FILES["photo"]["name"]);
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["photo"]["name"]);
	$extension = end($temp);
	if ((($_FILES["photo"]["type"] == "image/gif")
	|| ($_FILES["photo"]["type"] == "image/jpeg")
	|| ($_FILES["photo"]["type"] == "image/jpg")
	|| ($_FILES["photo"]["type"] == "image/pjpeg")
	|| ($_FILES["photo"]["type"] == "image/x-png")
	|| ($_FILES["photo"]["type"] == "image/png"))
	&& ($_FILES["photo"]["size"] < 1000000)
	&& in_array($extension, $allowedExts))
	{
	    if ($_FILES["photo"]["error"] > 0) {
	        echo "Return Code: " . $_FILES["photo"]["error"] . "<br>";
	    } else {   
	        if (!file_exists("images/" . $_FILES["photo"]["name"])){
	            move_uploaded_file($_FILES["photo"]["tmp_name"],
	            "images/" . $_FILES["photo"]["name"]);
	        }
	    }
	} else {
	    echo "Invalid file";
	}
}


// display an image with a given width and height from the images folder
function displayPicture(name, width, height)
{
$imageURL = "images/".$name;
echo "<img src=$imageURL width=$width height=$height>";
}

// Checking if a user is logged in
function userLoggedIn()
{
if (isset($_SESSION['user'])) return true;

return false;
}

// Checking if an administrator is logged in
function adminLoggedIn()
{
if (isset($_SESSION['admin'])) return true;

return false;
}
*/
?>
