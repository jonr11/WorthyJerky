<?php
require 'header.php'
?>
<h1>ACCOUNT PAGE</h1>
<p>The user will be able to view and edite their account details here</p>

<?php
 if (isset( $_POST['email'] ) && isset( $_POST['password'] ) ) {
        		// Set up database
        		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        
        		//Clean up the post data
        		$username = strip_tags( $_POST['username'] );
        		$password = strip_tags( $_POST['password'] );
                $password = hash("sha256",$_POST['password']);
        
                //TODO: if-else for checking for admin versus user.  Right now only checks admin.
                // probably just do this based on the permissions level, not separate table

        		//Check for a record that matches the POSTed credentials
        		$query = "SELECT * FROM admins WHERE username = '$username'	AND password = '$password'";       
        		$result = $mysqli->query($query);
              
        		if ( $result && $result->num_rows == 1) {
        			$row = $result->fetch_assoc();
        
        			echo "<p>Login successful\n <br />\n</p>";
                    
                    // if $row['permissions'] = 0 {}
                    logAdminIn();                    
                    // else logUserIn();

                    setUsername($row['username']);
                      
        		} else {
        			echo '<p>' . $mysqli->error . '</p>';
        ?>
        			<p>Login information incorrect</p>
        			<p><a href="login.php">Click here</a> to try again.</p>
		<?php
                }    
                $mysqli->close();
            } 
        ?>



<?php
require 'footer.php'
?>