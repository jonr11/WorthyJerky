<?php

// This file will display appropriate error messages for input fields that
// are not filled in or submitted correctly.

// Certain fields will be required, such as when logging in, filling out order
// information, or creating account, and will display a message indicating so
// if it is not filled in. Some fields for creating an account and filling in order
// information will not be required

// Most fields will be limited in length and what kind of input will be accepted.  For
// this most part, this just means no special characters

// This file is split up into separate error functions for each page, so each page will call different validation methods

function validateLoginInputs($username, $password)
{

    // Create validation tracking variables
    var valid = true;
    var validationMessage = 'Please correct the following errors:\r\n';

    // Validate username
    if (strlen($username) == 0)
    {
        validationMessage = validationMessage + ' the username is missing\r\n';
        valid = false;
    }
    elseif (strlen($username) > 40){
        validationMessage = validationMessage + ' the username cannot be longer than 40 characters\r\n';
        valid = false;
    }
    
    // Validate password
    if (strlen($password) == 0)
    {
        validationMessage = validationMessage + ' password is missing\r\n';
        valid = false;
    }
    elseif (strlen($password) > 40){
        validationMessage = validationMessage + ' the password cannot be longer than 40 characters\r\n';
        valid = false;
    }

    if (valid == false)
    {
        return validationMessage;
    }

    return "";
 }

function validateShopInputs($product, $description, $price1, $price2, $price3)
{

    // Create validation tracking variables
    var valid = true;
    var validationMessage = 'Please correct the following errors:\r\n';

    // Validate product
    if (strlen($product) == 0)
    {
        validationMessage = validationMessage + ' the product name is missing\r\n';
        valid = false;
    }
    elseif (strlen($product) > 100){
        validationMessage = validationMessage + ' the product name cannot be longer than 100 characters\r\n';
        valid = false;
    }
    
    // Validate description
    if (strlen($description) == 0)
    {
        validationMessage = validationMessage + ' the product description is missing\r\n';
        valid = false;
    }
    elseif (strlen($description) > 500){
        validationMessage = validationMessage + ' the product description cannot be longer than 500 characters\r\n';
        valid = false;
    }

    // Validate price tiers
    if (strlen($price1) == 0)
    {
        validationMessage = validationMessage + ' the price1 field is missing\r\n';
        valid = false;
    }
    elseif (isCurrency($price1) == false){
        validationMessage = validationMessage + ' prices must use a valid dollar amount \r\n';
        valid = false;
    }
    if (strlen($price2) == 0)
    {
        validationMessage = validationMessage + ' the price2 field is missing\r\n';
        valid = false;
    }
    elseif (isCurrency($price2) == false){
        validationMessage = validationMessage + ' prices must use a valid dollar amount \r\n';
        valid = false;
    }
    if (strlen($price3) == 0)
    {
        validationMessage = validationMessage + ' the price2 field is missing\r\n';
        valid = false;
    }
    elseif (isCurrency($price3) == false){
        validationMessage = validationMessage + ' prices must use a valid dollar amount \r\n';
        valid = false;
    }


    if (valid == false)
    {
        return validationMessage;
    }

    return "";
 }

function isCurrency($number)
{
  return preg_match("/^-?[0-9]+(?:\.[0-9]{1,2})?$/", $number);
}

// Sanitizing input to the validation functions
  function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>
