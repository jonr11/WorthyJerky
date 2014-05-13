<?php

// This file contains code necessary for multiple pages.

include 'config.php';

// Check if user logged out
if(isset($_POST['logout'])) {
    logout();
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


// LOGGING IN/OUT METHODS

// Checking if an administrator is logged in
function adminLoggedIn()
{
if (isset($_SESSION['admin'])) return true;
return false;
}

function logAdminIn()
{
	$_SESSION['admin'] = true;
}

function logout()
{
    if (isset($_SESSION['admin'])) {
      unset($_SESSION['admin']);
    }
}

?>
