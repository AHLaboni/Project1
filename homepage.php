<?php
session_start();
$Username=$_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
<title>HomePage</title>
</head>
<body>
	<h1>
<?php
if(!isset($_SESSION["username"])){
	header("Location:login.php");
}	

include 'header.php';

	echo'<br>';
	echo ' <form>
	<center>
	<a href="orderlist.php">Order list-</a>
	<a href="orderhistory.php">Order History-</a>
	<a href="livechat.php">GPS-</a>
	<a href="livechat.php">Delivery Confirmation-</a>
	<a href="livechat.php">Live Chat</a>
	</center>
	</form>';

	echo '
	<h3><center>Our Services</center></center></h3>
	<fieldset>
	<p>This is an online shop available in Dhaka, Chattogram, Jashore, Khulna, Sylhet, Gazipur, Rajshahi and Narayanganj. 
	We believe time is valuable to our 
	fellow residents, and that they should not have to waste 
	hours in traffic, brave bad weather and wait in line just to buy basic necessities like eggs!
	 This is why Chaldal delivers everything you need right at your door-step and at no additional cost.</p></fieldset><br>

	<h3><center>About Us</center></center></h3>
	<fieldset>
	<p>When you use our Website, we collect and store your personal information which is provided by you from time to time.
	 Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide 
	 services and features that most likely meet your needs, 
	 and to customize our website to make your experience safer and easier. More importantly, 
	while doing so, we collect personal information from you that we consider necessary for achieving this purpose. <br><br>


	Below are some of the ways in which we collect and store your information: <br>
	
	We receive and store any information you enter on our website or give us in any other way. We use the information that you provide
	 for such purposes as responding to your requests, customizing future shopping for you, improving our stores, and communicating 
	 with you.
	We also store certain types of information whenever you interact with us. For example, like many websites, we use "cookies," 
	and we obtain certain types of information when your web browser accesses eshop.com or advertisements and other content served by
	 or on behalf of Chaldal.com on other websites.
	When signing up via Facebook, we collect your Name and Email (provided by Facebook) as part of your Chaldal account Information.
	To help us make e-mails more useful and interesting, we often receive a confirmation when you open e-mail from Chaldal if your 
	computer supports such capabilities.</p>
	</fieldset>';

?>

	
<?php include 'footer.php';?>