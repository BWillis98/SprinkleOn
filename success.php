<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Sprinkle On Seasoning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Sprinkle On Seasoning</a>
	</div>
    
	<div>
      <ul class="nav navbar-nav pull-right" >
        <li><a href="index.php"><span class=" glyphicon glyphicon-home"></span></a></li>
		<li><a href="products.php"><b>Products</b></a></li>
        <li><a href="cart.php"><b>View Cart</b></a></li> 
        <li><a href="contact.php"><b>Contact</b></a></li>
		<?php
		  if (isset($_SESSION['type']))
		  {
			  if ($_SESSION['type'] == 'admin')
			  {
				  echo '<li><a href="orders.php">My Orders</a></li>';
			  } 
		  }
		 
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php"><b>My Account</b></a></li>';
            echo '<li><a href="logout.php"><b>Log Out</b></a></li>';
          }
          else{
            echo '<li><a href="login.php"><b>Login</b></a></li>';
            echo '<li><a href="register.php"><b>Sign Up </b></a></li>';
          }
          ?>
		  <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></a></li>
      </ul>
	  
    </div>
  </div>
</nav>




    <div class="row" style="margin-top:10px;">
      
        <p>Success. Whatever task you performed, has been executed successfully. Congrats!</p>
        <p>In case you purchased a product, then please check your spam in email for the receipt.</p>

    </div>
  
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Sprinkle On Seasoning. All Rights Reserved.</p>
        </footer>

      
    





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
