<?php
require 'header.php'
?>


<?php
 if (isset( $_POST['email'] ) && isset( $_POST['password'] ) ) {
	// Set up database
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	//Clean up the post data
	$email = strip_tags( $_POST['email'] );
	$password = strip_tags( $_POST['password'] );
    $password = hash("sha256",$_POST['password']);

    //TODO: if-else for checking for admin versus user.  Right now only checks admin.
    // probably just do this based on the permissions level, not separate table

	//Check for a record that matches the POSTed credentials
	$query = "SELECT * FROM Users WHERE Email = '$email'	AND Password = '$password'";       
	$result = $mysqli->query($query);
  
	if ( $result && $result->num_rows == 1) {
		$row = $result->fetch_assoc();

		echo "<p>Login successful\n <br />\n</p>";
        
        if ($row['Permissions'] == 0) {
            logUserIn();
        } else {
            logAdminIn();
        }                    

        setUsername($row['fName']);
          
	} else {
		echo '<p>' . $mysqli->error . '</p>';
        ?>
		<p>The supplied login information was not found.</p>
		<p>If you think this may have been an error, please <a href="login.php">try again</a>.</p>
        <?php
    }    
    
    $mysqli->close();
} 


if (userLoggedIn() || adminLoggedIn() ) {
    $name = username();
    echo "<h1>Welcome, $name!</h1>";
    ?>

    <p> The following information is saved to your account and will be used to speed up future purchases.</p>
    <p> Please check that the information is correct, and update any values you would like:</p>
    <form accept-charset="UTF-8" action="account.php" id="customer_login" method="post">
         <ul>
             <li class="account_fields"><input type="email" value="" name="email" id="customer_email" class="form-control" placeholder="Your Email" size="30" /></li>
             <li class="account_fields"><input type="password" value="" name="password" id="customer_password" class="form-control" placeholder="Password" size="30" height="50px"/></li>
             <li class="account_fields">Shipping Address:</li>
             <li class="account_fields"><input type="text" value="" name="address" id="customer_password" class="form-control" placeholder="123 ABC St." size="30" height="50px"/></li>
             <li class="account_fields"><input type="text" value="" name="city" class="form-control" placeholder="Ithaca" size="30" height="50px"/></li>
             <li class="account_fields"><input type="text" value="" name="state" class="form-control" placeholder="New York" size="30" height="50px"/></li>
             <li class="account_fields"><input type="text" value="" name="zip"  class="form-control" placeholder="14850" size="30" height="50px"/></li>
             <li class="account_fields"><input class="btn btn-default" type="submit" value="SAVE">
        </ul>
    </form>

<?php
}

require 'footer.php'
?>