<?php
require 'header.php';
?>
		<img src="images/worthy_jerky1" alt="rasp" height="200" width="1000">
	<h1>OUR STORY</h1>

	<p>Our Story started in the scenic Swiss Alps. When our founder, Alex, moved from Florida to Switzerland to attend the Leysin American boarding school, his overseas adventure inspired an adventure of an entirely different nature...</p>



<p>Craving a bit of home one day, Alex made some beef jerky like his mom used to make for his lunchbox. He then realized that his healthy and filling snack would be perfect for the active students at his school—both as a snack for between classes and fuel for outdoor activities. Adding intricate new flavors to his jerky, Alex started selling it out of his dorm room.</p>
		<?php 
            // Only display forms if you haven't just submitted the form
            if ( ! isset( $_POST['username'] ) && ! isset( $_POST['password'] ) ) {
		?>
			<h2>Log in</h2>
			<form action="login.php" method="post">
				<input type="text" name="username"/> <br />
				<input type="submit" value="Change Text"/>
			</form>
			
		<?php


<p>As demand for his jerky grew, Alex’s excitement grew as well, giving him the confidence to continue to pursure his jerky company dream when he left boarding school and got to Cornell University. Since three years ago our team has grown to ten people, and our collective vision of providing people with natural, healthy, and flavorful jerky has lead us to form Worthy Jerky.</p>
	<h1>MEET THE TEAM</h1>
	<img src="images/tea.jpg" alt="rasp" height="400" width="700">
	<p>[Pictures of each team member will go here]</p>

	<?php
	/* if (adminLoggedIn() == true){

 	//display input forms to allow admins to choose
	// what picture from the server to display in a given spot or to upload an image to the server
	// use displayPicture() or addPicture() depending on what's clicked

	// display forms to allow admins to edit the text of each section
	*/
	?>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	
		<?php 
            // Only display forms if you haven't just submitted the form
            if (isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
		?>
			<h2>Log in</h2>
			<form action="login.php" method="post">
				<input type="text" name="username"/> <br />
				<input type="submit" value="Change Text"/>
			</form>
			
		<?php

	<h1><a href="shop.php" class="buy">BUY NOW</a></h1>

<?php
require 'footer.php';
?>