<html>

<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="design3.css">

	<style type="text/css">
		#main {
			padding-bottom: 80px;
			padding-top: 80px;
		}

		a {
			color: white;
			text-decoration: none;
		}

		input[type="text"], input[type="email"], textarea {
			border: 0px;
			border-radius: 1px;
			font-family: candara;
			font-size: 17px;
			padding: 10px;
			width: 430px;
		}
	</style>
</head>

<body onload="date()">

	<div class="container">
		<div class="header">
			<a href="Home.php"><img class="logo" src="Logo.png"></div></a>
		</div>

		<div class="navbar">
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td class="navmenu">
						<a href="Home.php"><input class="navbutton" type="submit" value="HOME"></a>
					</td>
					<td class="navmenu">
						<a href="Gallery.php"><input class="navbutton" type="submit" value="GALLERY"></a>
					</td>
					<td class="navmenu">
						<a href="About Us.php"><input class="navbutton" type="submit" value="ABOUT US"></a>
					</td>
					<td class="navmenu">
						<a href="Contact Us.php"><input class="navbutton" type="submit" value="CONTACT US"></a>
					</td>
					<td class="navmenu">
						<a href="Reservation.php"><input class="navbutton" type="submit" value="RESERVATION"></a>
					</td>
					<td class="navmenu">
						<input class="navbutton" onclick="logout()" type="submit" value="LOGOUT">
					</td>
				</tr>
			</table>
		</div>

		<div id="main">	
			<div id="divcontact">
				<div id="contact">
					<table border="0" class="visit" id="getintouch" cellpadding="0" cellspacing="10">
						<tr>
							<td class="alltitle" colspan="2">GET IN TOUCH</td>
						</tr>
						<tr>
							<td id="note" colspan="2">
								We appreciate your time approaching us. You can inquire or get in touch to us through the following:
							</td>
						</tr>
						<tr>
							<td class="icon">
								<img class="picicon" src="Contact/Number.png">
							</td>
							<td class="vis">09481384503</td>
						</tr>
						<tr>
							<td class="icon">
								<a href="http://www.facebook.com"><img class="picicon" src="Contact/Facebook.png"></a>
							</td>
							<td class="vis">
								 <a href="http://www.facebook.com">facebook.com/ <br >SanIsidroNationalHighSchoolMakati </a>
							</td>
						</tr>
						<tr>
							<td class="icon">
								<a href="http://www.twitter.com"><img class="picicon" src="Contact/Twitter.png"></a>
							</td>
							<td class="vis">
								<a href="http://www.twitter.com">@sinhs</a>
							</td>
						</tr>
						<tr>
							<td class="icon">
								<a href="http://www.gmail.com"><img class="picicon" src="Contact/Email.png"></a>
							</td>
							<td class="vis">
								<a href="http://www.gmail.com">sinhs@gmail.com</a>
							</td>
						</tr>
					</table>
					<form method="post" id="myTarget">
						<table border="0" class="visit" cellpadding="0" cellspacing="10">
							<tr>
								<td class="alltitle">SEND MESSAGE</td>
							</tr>
							<tr>
								<td><input id="yourname" name="yourname" oninput="text3()" placeholder="Name" type="text" required></td>
							</tr>
							<tr>
								<td><input id="youremail" name="youremail" placeholder="Email" type="email" required></td>
							</tr>
							<tr>
								<td><input id="yournumber" maxlength="11" name="yournumber" onblur="validation2()" oninput="num2()" placeholder="Number" type="text" required></td>
							</tr>
							<tr>
								<td><textarea id="yourmessage" name="yourmessage" placeholder="Message" required></textarea></td>
							</tr>
							<tr>
								<td><input id="btnmessage" name="btnmessage" onclick="message()" type="submit" value="SEND MESSAGE"></td>
							</tr>
						</table>
					</form>
					<iframe class="storage" name="storage" style="position: fixed; visibility: hidden"></iframe>
				</div>
			</div>
		</div>

		<div class="copyright">
			Copyright &copy; SINHS 2018
		</div>
	</div>
	
	<script src="function.js"></script>

</body>

</html>

<!-- PHP -->
<?php
	if (isset($_POST['btnmessage'])) {
		require('connection.php');

		$user_id = rand(1000000, 9999999);
		$name = $_POST['yourname'];
		$email = $_POST['youremail'];
		$num = $_POST['yournumber'];
		$mes = $_POST['yourmessage'];

		$sqlView = "SELECT id, firstname, lastname, username, password FROM tbl_register";
		$result = mysqli_query($link, $sqlView);

		if (strlen($num) >= 7) {
			$sqlSave = "INSERT INTO tbl_contact(id, time, name, email, ct_number, message) 
			VALUES($user_id, Now(), '$name', '$email', '$num', '$mes')";

			mysqli_query($link, $sqlSave);
			echo "<script>alert('Your message sent.')</script>";
		}
		else {
			echo "<script>alert('That is not a valid cellphone or telephone number.')</script>";
		}
	}
?>