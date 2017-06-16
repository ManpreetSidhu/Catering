<!Doctype html>
<html>

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
						<!-- CSS goes in the document HEAD or added to your external stylesheet -->

						<style type="text/css"><!--
						table.gridtable { font-family: verdana,arial,sans-serif; font-size:11px; color:#333333; border-width: 1px; border-color: #666666; border-collapse: collapse; } table.gridtable th { border-width: 1px; padding: 8px; border-style: solid; border-color: #666666; background-color: #dedede; } table.gridtable td { border-width: 1px; padding: 8px; border-style: solid; border-color: #666666; background-color: #ffffff; }
						--></style><!-- Table goes in the document BODY -->
						<table class="gridtable">
						<tbody>
						<tr>
						<th>Serial No.</th>
						<th>Email</th>
						<th>Complaint Type</th>
						<th>Complaint Detail</th>
						</tr>
						<?php
						include ('Database/MySqlDatabase.php');
						$obj=new MySqlDatabase('simran','localhost','root','');
						$data=mysql_query("SELECT * FROM complaint");

						while($info=mysql_fetch_array($data))
						{
						?>
							<tr>
						<td><?php echo $info['sno']; ?></td>
						<td><?php echo $info['email']; ?></td>
						<td><?php echo $info['cmt']; ?></td>
						<td><?php echo $info['cmd']; ?></td>
						</tr>
						<?php
						}
						?>
						</tbody>
						</table>

					</div>
				
				</div>
				<div style="clear:both"> </div>
				<hr>
				<div id="footer">
					<p>This Website Designed By <a href="#">Jasleen Kaur</a></p>
				</div>
			</div>
		</div>



	</body>
</html>
