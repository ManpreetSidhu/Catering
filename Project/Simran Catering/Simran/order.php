<!Doctype html>
<html>

<?php
include ('Database/MySqlDatabase.php');
if(isset($_POST['sub']))
{

$name=$_POST['name'];
$phno=$_POST['phno'];
$address=$_POST['address'];
$city=$_POST['city'];
$obj=new MySqlDataBase('simran','localhost','root','');
$obj->query("INSERT INTO orders(name,phno,address,city) values ('$name','$phno','$address','$city')");
}
?>

	<head>
		<title>Simran Catering </title>
		<link rel="stylesheet" href="style.css"type="text/css" media="screen"/>
		
	</head>
	<body>
		<div id="wrapper">
			<div id="container">
				<div id="header">
					<div id="logo">
						<h1><a href="#">Simran<span> Catering</span></a></h1>
					</div>
					<div id="login-register">
						<li><a href="register.php">Login/Register</a></li>
					</div>
				</div>
				<div id="navbar">
					<div id="menu">
						<ul>
							<li> <a href="index.php">Home</a><li>
							<li> <a href="about.php">About us</a><li>
							<li> <a href="services.php">Our Services</a><li>
							<li> <a href="enquiry.php">Enquiry</a><li>
							<li> <a href="feedback.php">Feedback</a><li>
							<li> <a href="contact.php">Contact us</a><li>					
							<li> <a href="complaint.php">Complaint</a><li>	
							<li> <a href="menu.php">Menu</a><li>							
						</ul>
					</div>
					<div id="search">
						<form method="get" action="">
							
							<input type="text" name="s" class="dynamic" id="search-text" size="15" placeholder="Search" />
							<input type="submit" class="go" id="search-submit" value="GO" />
							
						</form>
					</div>
				</div>
				<div style="clear:both"> </div><hr>
				<div>
	<div id="sidebar">
						<li><img src="images/g5.jpg" alt="image1"/></li>
						<li><img src="images/g6.jpg" alt="image1"/></li>
						<li><img src="images/g7.jpg" alt="image1"/></li>
						<li><img src="images/g8.jpg" alt="image1"/></li>
					</div>
				
					<div id="body">
						<div id="enquiry">
							<h2>Order</h2>
							<form action="order.php" method="post">
							<label>Occasion:</br> <input  size="30" maxlength="40" type="text" required="required" name="name"/></label>
							<p>Number of Person:</br><input  size="30" maxlength="40" type="text" required="required" name="phno"/><p>
							<p>Venue:</br><input size="30" maxlength="40" type="text" required="required" name="address"/></p>
							<p>Items:</br><input size="30" maxlength="40" type="text" required="required" name="city"/></p>
							
							<input type="submit" value="Submit" name="sub">
							</form>
						</div>
					</div>
				
				</div>
				<div style="clear:both"> </div>
				<hr>
				<div id="footer">
					<p>This Website Designed By <a href="#">Manpreet Kaur</a></p>
				</div>
			</div>
		</div>



	</body>
</html>
