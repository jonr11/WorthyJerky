<?php
require 'header.php';
?>
<br>
<h1>THE INGREDIENTS</h1>
<br>

<?php
/* if (adminLoggedIn() == true){

	//display input forms to allow admins to choose
	// what picture from the server to display in a given spot or to upload an image to the server
	// use displayPicture() or addPicture() depending on what's clicked
	
	// display forms to allow admins to edit the text of each section
*/
?>

<div class="ingredients">
	<img class="circle2" src="images/DSC_0273.JPG" alt="rasp" height="200" width="200">
	<img class="circle2" src="images/DSC_0292.JPG" alt="tomato" height="200" width="200">
	<img class="circle2" src="images/DSC_0301.jpg" alt="peppers" height="200" width="200">
	<img class="circle2" src="images/DSC_0318.jpg" alt="pep" height="200" width="200">
</div>
<div class="ingredients">
	<img class="circle2" src="images/DSC_0359.JPG" alt="fruits" height="200" width="200">
	<img class="circle2" src="images/DSC_0380.JPG" alt="pineapple" height="200" width="200">
	<img class="circle2" src="images/DSC_0396.jpg" alt="fruit" height="200" width="200">
	<img class="circle2" src="images/DSC_0406.JPG" alt="spice" height="200" width="200">
</div>
<br>
<h1>JERKY FLAVORS</h1>
<p>Here we will have the list of the different flavors of jerky and the description of each flavor.</p>
<br>
<h1><a href="shop.php" class="buy">BUY NOW</a></h1>
<?php
require 'footer.php';
?>
