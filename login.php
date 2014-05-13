<?php
require 'header.php';
?>

<h1>Administrator Mode</h1>
<p>Successful Login grants administrator access to edit content on the site.</p>


<?php 
$errors = "";
$loginMessage = "";

if (isset($_POST['logout'])) {
  logout();
}
elseif (isset($_POST['login'])) {
  //Validate inputs and clean up the post data
  $username = test_input( $_POST['username'] );
  $password = test_input( $_POST['password'] );
  $errors = validateLoginInputs($username, $password);

  if (strlen($errors) == 0){
      //Check for a record that matches the POSTed credentials
      $query = "SELECT * FROM Admins WHERE Username = '$username'";       
      $result = $mysqli->query($query);
      
      if ($result) {
          $row = $result->fetch_assoc();

          $password = $password.$row['Salt'];
          $password = hash("sha256",$password);
          if ($password == $row['Password']){
              $loginMessage = "Login successful";
              logAdminIn();      
          } else {
              $errors = "The supplied login information was not found.";
          }
      } else {
        $errors = $mysqli->error;
      }
  }
    
  $mysqli->close();
}

// Only display login forms if admin isn't logged in already, else display logout button
if ( ! adminLoggedIn() ) {
    ?>
    <div class="sign-in-up">
        <div class="login">
            <h2>ACCOUNT LOGIN</h2>
            <p>Please enter your username and password.</p>

            <?php 
                if (strlen($errors) > 0) echo "<p class='error'>$errors</p>";
                if (strlen($loginMessage) > 0) echo "<p class='successful'>$loginMessage</p>";
            ?>

            <form accept-charset="UTF-8" action="login.php" id="customer_login" method="post">
            	  <ul>
            	      <li class="account_fields"><input type="text" value="" name="username" id="username" class="form-control" placeholder="Username" size="30" /></li>
            	      <li class="account_fields"><input type="password" value="" name="password" id="username" class="form-control" placeholder="Password" size="30" height="50px"/></li>
            	      <li class="account_fields"><input class="btn btn-default" type="submit" name="login" value="LOGIN">
            	  </ul>
            </form>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="sign-in-up">
        <div class="login">
            <h2>YOU ARE LOGGED IN AS AN ADMIN</h2>
            <p> Click below to log out. </p>
            <form accept-charset="UTF-8" action="login.php" id="customer_login" method="post" onsubmit=>
                <ul>
                    <li class="account_fields"><input class="btn btn-default" type="submit" name="logout" value="LOGOUT">
                </ul>
            </form>
        </div>
    </div>
    <?php
}

    require 'footer.php';
?>