<?php
require 'header.php';
?>



<!--<h1><a href="shop.php" class="buy">BUY NOW</a></h1>-->


	<?php
	/* if (adminLoggedIn() == true){

 	//display input forms to allow admins to choose
	// what picture from the server to display in a given spot or to upload an image to the server
	// use displayPicture() or addPicture() depending on what's clicked
	
	// display forms to allow admins to edit the text of each section
	*/
	?>

<table>
    <tr>
        <td class="circle" style = " background-color: #FF6699;">
            Buy Now
        </td>
        
        <td class="circle" style = " background-color: #5CD6FF; ">
            Ithaca Pop Shop
        
        </td>
        
        <td class="circle" style = " background-color:#99FF66;">
            Meet the team
        
        </td>
        
        <td class="circle" style = " background-color: #FF9933; ">
            Hear Our Story
        
        </td>
        
    
    </tr>

</table>

<img  class="chili" src="images/chilicropped.png"/>

<br />
<div class="circleImages">
  <img class="cirlceImage" src="images/PopShop.jpg"/> <caption>Where we are now</caption>

 <img class="cirlceImage" src="images/swiss-flag.jpg"/> <caption>Where we began</caption>
</div>

<?php
require 'footer.php';
?>