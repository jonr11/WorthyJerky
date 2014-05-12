<?php
require 'header.php';
?>

	<h1>OUR STORY</h1>

	<img src="images/worthy_jerky1" alt="rasp" height="200" width="1000">

	<p>Our Story started in the scenic Swiss Alps. When our founder, Alex, moved from Florida to Switzerland to attend the Leysin American boarding school, his overseas adventure inspired an adventure of an entirely different nature...</p>

	<p>Craving a bit of home one day, Alex made some beef jerky like his mom used to make for his lunchbox. He then realized that his healthy and filling snack would be perfect for the active students at his school—both as a snack for between classes and fuel for outdoor activities. Adding intricate new flavors to his jerky, Alex started selling it out of his dorm room.</p>

	<p>As demand for his jerky grew, Alex’s excitement grew as well, giving him the confidence to continue to pursure his jerky company dream when he left boarding school and got to Cornell University. Since three years ago our team has grown to ten people, and our collective vision of providing people with natural, healthy, and flavorful jerky has lead us to form Worthy Jerky.</p>
	
		<?php 
            // Only display forms if you haven't just submitted the form
            if ( adminLoggedIn() ) {
				echo
				"<form action='about.php' method='post'>
					<input type='text' name='storyText'/> <br />
					<input type='submit' name='storySubmit' value='Change Text'/>
				</form>";
			}
		?>

	<h1>MEET THE TEAM</h1>
	<img src="images/tea.jpg" alt="rasp" height="400" width="700">
	<p>[Pictures of each team member will go here]</p>


	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	
		<?php 
            // Only display forms if you haven't just submitted the form
            if ( adminLoggedIn() ) {
				echo
				"<form action='about.php' method='post'>
					<input type='text' name='teamText'/> <br />
					<input type='submit' name='teamSubmit' value='Change Text'/>
				</form>";
			}
		?>

	<h1><a href="shop.php" class="buy">BUY NOW</a></h1>

<?php
require 'footer.php';
?>