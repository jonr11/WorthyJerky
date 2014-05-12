<?php
require 'header.php';
?>

<h1>LOG IN OR CREATE AN ACCOUNT</h1>
<p>Creating an account makes placing orders super easy!  You'll also be the first to know about special offers and new products.</p>


<?php
	// check that the fields are input correctly using validateLogin or validateCreateAccount in utils depending on which
	// section is submitted
?>

<div class="sign-in-up">
        <div class="row">
          
          <div class="login">
            <h2>SIGN IN</h2>
            <p>
                Please enter your email address and password.
            </p>
            <form accept-charset="UTF-8" action="account.php" id="customer_login" method="post">
            	 <ul>
            	     <li class="account_fields"><input type="email" value="" name="email" id="customer_email" class="form-control" placeholder="Your Email" size="30" /></li>
            	     <li class="account_fields"><input type="password" value="" name="password" id="customer_password" class="form-control" placeholder="Password" size="30" height="50px"/></li>
            	     <li class="account_fields"><input class="btn btn-default" type="submit" value="LOGIN">
            	</ul>
            </form>
          </div>

          <div class="register">
            <div >
              <h2>REGISTER</h2>
              <p>
                Registering makes checkout even faster by saving your order information in your account.
              </p>
              <form accept-charset="UTF-8" action="account.php" id="create_customer" method="post"><input name="form_type" type="hidden" value="create_customer"><input name="utf8" type="hidden" value="✓">
                <div >
                	<ul>
            	      <li class="account_fields"><input type="text" value="" name="customer[first_name]" id="first_name" class="form-control" placeholder="First Name" size="30" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat no-repeat;"></li>
                      <li class="account_fields"> <input type="text" value="" name="customer[last_name]" id="last_name" class="form-control" placeholder="Last Name" size="30"></li>
                      <li class="account_fields"><input type="email" value="" name="customer[email]" id="email" class="form-control" placeholder="Email" size="30"></li>
                      <li class="account_fields"><input type="password" value="" name="customer[password]" id="password" class="form-control" placeholder="Password" size="30" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat no-repeat;"></li>
                      <li class="account_fields"><input class="btn btn-default" type="submit" value="REGISTER">
                    </ul>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<?php
require 'footer.php';
?>