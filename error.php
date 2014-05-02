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

// The following is pseduocode but follows the general format of how error checking will be handled
function validateLogin(username, password)
    {

        // Create validation tracking variables
        var valid = true;
        var validationMessage = 'Please correct the following errors:\r\n';

        // Validate username
        if (usernamelength == 0)
        {
            validationMessage = validationMessage + ' the username is missing\r\n';
            valid = false;
        }
        
        // Validate password
        if (passwordlength == 0)
        {
            validationMessage = validationMessage + ' password is missing\r\n';
            valid = false;
        }

		// For now display alert box with errors if any errors found.  Later on we'll make this display nicer on the page
        if (valid == false)
        {
            alert(validationMessage);
        }

        return valid;
 }

function validateCreateAccount(username, password, email)
    {

        // Create validation tracking variables
        var valid = true;
        var validationMessage = 'Please correct the following errors:\r\n';

        // Validate username
        if (usernamelength == 0)
        {
            validationMessage = validationMessage + ' the username is missing\r\n';
            valid = false;
        }
        
        // Validate password
        if (passwordlength == 0)
        {
            validationMessage = validationMessage + ' password is missing\r\n';
            valid = false;
        }

        // Validate email
        if (emaillength == 0)
        {
            validationMessage = validationMessage + ' email is missing\r\n';
            valid = false;
        }

		// For now display alert box with errors if any errors found.  Later on we'll make this display nicer on the page
        if (valid == false)
        {
            alert(validationMessage);
        }

        return valid;
 }

 function validateOrderQuantity(quantity)
    {

        // Create validation tracking variables
        var valid = true;
        var validationMessage = 'Please correct the following errors:\r\n';

        // Validate quantity
        if (quantitylength == 0)
        {
            validationMessage = validationMessage + ' the username is missing\r\n';
            valid = false;
        }
        
        // Make sure the quantity is a whole number between 1 and upper limit determined by client
        if (quantity not in range)
        {
            validationMessage = validationMessage + ' the quantity must be between 1 and [upper limit] \r\n';
            valid = false;
        }

		// For now display alert box with errors if any errors found.  Later on we'll make this display nicer on the page
        if (valid == false)
        {
            alert(validationMessage);
        }

        return valid;
 }

function validateCheckout(name, email, address)
    {

        // Create validation tracking variables
        var valid = true;
        var validationMessage = 'Please correct the following errors:\r\n';

        // Validate name
        if (namelength == 0)
        {
            validationMessage = validationMessage + ' the name is missing\r\n';
            valid = false;
        }
        
        // Validate email
        if (emaillength == 0)
        {
            validationMessage = validationMessage + ' the email is missing\r\n';
            valid = false;
        }

        // Validate address
        if (addresslength == 0)
        {
            validationMessage = validationMessage + ' the address is missing\r\n';
            valid = false;
        }

		// For now display alert box with errors if any errors found.  Later on we'll make this display nicer on the page
        if (valid == false)
        {
            alert(validationMessage);
        }

        return valid;
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
