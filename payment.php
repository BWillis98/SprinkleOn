
	<?php
#Business ($paypal_email) – Enter the email address of your PayPal account.
#Item name ($item_name) – The name of the item being purchased.
#Amount ($item_amount) – The price of the item.
#Return ($return_url) – The address to return to after a successful payment.
#Cancel Return ($cancel_url) – the address to return to after a cancelled payment.
#Notify URL ($notify_url) – The address of the payments.php page on your website.
#Custom – Any other data to be sent and returned with the PayPal request
	// Database variables

$host = "localhost"; //database location

$user = ""; //database username

$pass = ""; //database password

$db_name = ""; //database name

 

// <a href="#">PayPal</a> settings

$paypal_email = 'user@domain.com';

$return_url = 'http://domain.com/payment-successful.html';

$cancel_url = 'http://domain.com/payment-cancelled.html';

$notify_url = 'http://domain.com/payments.<a href="#">php</a>';

 

$item_name = 'Test Item';

$item_amount = 5.00;

 

// Include Functions

include("functions.php");

 

// Check if <a href="#">paypal</a> request or response
if (!isset($_POST["txn_id"]) &amp;amp;amp;amp;amp;amp;&amp;amp;amp;amp;amp;amp; !isset($_POST["txn_type"])){

    $querystring = '';

  
    // Firstly Append <a href="#">paypal</a> account to querystring

    $querystring .= "?business=".urlencode($paypal_email)."&amp;amp;amp;amp;amp;amp;";

  

    // Append amount&amp;amp;amp;amp;amp;amp; currency (£) to quersytring so it cannot be edited in html
  

    //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.

    $querystring .= "item_name=".urlencode($item_name)."&amp;amp;amp;amp;amp;amp;";

    $querystring .= "amount=".urlencode($item_amount)."&amp;amp;amp;amp;amp;amp;";

  

    //loop for posted values and append to querystring

    foreach($_POST as $key =&amp;amp;amp;amp;amp;gt; $value) {

        $value = urlencode(stripslashes($value));
        $querystring .= "$key=$value&amp;amp;amp;amp;amp;amp;";

    }

  

    // Append <a href="#">paypal</a> return addresses

    $querystring .= "return=".urlencode(stripslashes($return_url))."&amp;amp;amp;amp;amp;amp;";

    $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&amp;amp;amp;amp;amp;amp;";

    $querystring .= "notify_url=".urlencode($notify_url);

  

    // Append querystring with custom field

    //$querystring .= "&amp;amp;amp;amp;amp;amp;custom=".USERID;

  

    // Redirect to <a href="#">paypal</a> <a href="#">IPN</a>
    header('location:https://www.sandbox.<a href="#">paypal</a>.com/cgi-bin/webscr'.$querystring);

    exit();

} else {

   // Response from <a href="#">PayPal</a>

}
?>