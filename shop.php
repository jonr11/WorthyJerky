<?php
require 'header.php';
?>
<h1>SELECT ONE OF OUR UNIQUE JERKY FLAVORS</h1>
<p>Choose which size package you would like to purchase.</p>

<?php
if (isset($_POST['editProduct'])) {
		$product = test_input($_POST['product']);
		$description = test_input($_POST['description']);
		$price1 = test_input($_POST['price1']);
		$price2 = test_input($_POST['price2']);
		$price3 = test_input($_POST['price3']);
		$errors = validateShopInputs($product, $description, $price1, $price2, $price3);

		if (strlen($errors) == 0){
			$pID = $_POST['pID'];
			if ($_POST['stocked'] == 'true') $stocked = "true";
			else $stocked = "false";

			mysqli_query($mysqli, "UPDATE Products SET ProductName = '$product', 
													Description = '$description',
													Price1 = '$price1',
													Price2 = '$price2',
													Price3 = '$price3',
													Stocked = '$stocked'
			 										WHERE pID = $pID");
		} else 
			echo "<p class='error'>$errors<p>";
}

?>


<ul class='productList'>

<?php
    $result = $mysqli->query("SELECT * FROM Products");

    if (!$result) {
		print($mysqli->error);
		exit();
	}

	while ($row = $result->fetch_assoc()) {
			$product = $row['ProductName'];
			$image = $row['ImageURL'];
			$description = $row['Description'];
			$price1 = $row['Price1'];
			$price2 = $row['Price2'];
			$price3 = $row['Price3'];
			$pID = $row['pID'];

			if (!adminLoggedIn()) {
				if ($row['Stocked'] = "true"){
					echo "
						<li class='product'>
						
							<img src='$image' class='jerkyImg' alt='Jerky'> 	
							<h2> $product </h2>
							<p> $description </p>

							<form target='paypal' action='https://www.paypal.com/cgi-bin/webscr' method='post' >
								<input type='hidden' name='cmd' value='_cart'>
								<input type='hidden' name='business' value='bbp28@cornell.edu '>
								<input type='hidden' name='lc' value='US'>
								<input type='hidden' name='item_name' value='$product'>
								<input type='hidden' name='button_subtype' value='products'>
								<input type='hidden' name='no_note' value='0'>
								<input type='hidden' name='currency_code' value='USD'>
								<input type='hidden' name='tax_rate' value='8.000'>
								<input type='hidden' name='shipping' value='3.99'>
								<input type='hidden' name='add' value='1'>
								<input type='hidden' name='bn' value='PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest'>
								<table>
								<tr><td><input type='hidden' name='on0' value='Sizes'>Sizes</td></tr><tr><td><select name='os0'>
									<option value='3.25 oz'>3.25 oz $5.99 USD</option>
									<option value='6.25 oz'>6.25 oz $9.99 USD</option>
									<option value='12.00 oz'>12.00 oz $15.99 USD</option>
								</select> </td></tr>
								</table>
								<input type='hidden' name='currency_code' value='USD'>
								<input type='hidden' name='option_select0' value='3.25 oz'>
								<input type='hidden' name='option_amount0' value='$price1'>
								<input type='hidden' name='option_select1' value='6.25 oz'>
								<input type='hidden' name='option_amount1' value='$price2'>
								<input type='hidden' name='option_select2' value='12.00 oz'>
								<input type='hidden' name='option_amount2' value='$price3'>
								<input type='hidden' name='option_index' value='0'>
								<input type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'>
								<img alt='' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'>
							</form>
						</li>
					";
				}
			} else {

				$checked = "";
				if ($row['Stocked'] = "true") $checked = "checked";
				echo "
					<li class='product'>
					
						<img src='$image' class='jerkyImg' alt='Jerky'> 	
						<h2> $product </h2>
						<p> $description </p>

						<form target='paypal' action='https://www.paypal.com/cgi-bin/webscr' method='post' >
							<input type='hidden' name='cmd' value='_cart'>
							<input type='hidden' name='business' value='bbp28@cornell.edu '>
							<input type='hidden' name='lc' value='US'>
							<input type='hidden' name='item_name' value='$product'>
							<input type='hidden' name='button_subtype' value='products'>
							<input type='hidden' name='no_note' value='0'>
							<input type='hidden' name='currency_code' value='USD'>
							<input type='hidden' name='tax_rate' value='8.000'>
							<input type='hidden' name='shipping' value='3.99'>
							<input type='hidden' name='add' value='1'>
							<input type='hidden' name='bn' value='PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest'>
							<table>
							<tr><td><input type='hidden' name='on0' value='Sizes'>Sizes</td></tr><tr><td><select name='os0'>
								<option value='3.25 oz'>3.25 oz $5.99 USD</option>
								<option value='6.25 oz'>6.25 oz $9.99 USD</option>
								<option value='12.00 oz'>12.00 oz $15.99 USD</option>
							</select> </td></tr>
							</table>
							<input type='hidden' name='currency_code' value='USD'>
							<input type='hidden' name='option_select0' value='3.25 oz'>
							<input type='hidden' name='option_amount0' value='$price1'>
							<input type='hidden' name='option_select1' value='6.25 oz'>
							<input type='hidden' name='option_amount1' value='$price2'>
							<input type='hidden' name='option_select2' value='12.00 oz'>
							<input type='hidden' name='option_amount2' value='$price3'>
							<input type='hidden' name='option_index' value='0'>
							<input type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'>
							<img alt='' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'>
						</form>
					</li>

					<p> Edit product info:
					<form action='shop.php' method='post' >
						<input type='hidden' name='pID' value='$pID'>
						<ul class='productList'>
							<li>Name: <input type='text' name='product' value='$product'/> <br /> </li>
							<li>Description: <input type='text' name='description' value='$description' height='100px' width = '400px'/> <br /> </li>
							<li>Price Tier 1: <input type='text' name='price1' value='$price1'/> </li>
							<li>Price Tier 2: <input type='text' name='price2' value='$price2'/> </li>
							<li>Price Tier 3: <input type='text' name='price3' value='$price3'/> </li>
							<li> <input type='checkbox' name='stocked' value='true' $checked> In Stock </li>
							<li><input class='btn btn-default' type='submit' name='editProduct' value='CONFIRM'> </li> <br /><br /><br />
						</ul>
					</form>
				";
			}
	}

require 'footer.php';
?>