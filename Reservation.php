<html>

<head>
	<title>Reservation</title>
	<link rel="stylesheet" type="text/css" href="design3.css">

	<style type="text/css">
		#main {
			padding-bottom: 80px;
			padding-top: 80px;
		}

		input[type="text"], input[type="date"], input[type="password"] {
			border: 0px;
			border-radius: 1px;
			font-family: candara;
			font-size: 15px;
			padding: 8px;
			width: 320px;
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
			<div id="divreserve">
				<form method="post" id="myTarget">
					<table border="0" id="reserve" cellpadding="7" cellspacing="0" >
						<tr class="center">
							<td class="alltitle" colspan="2">RESERVATION FORM</td>
						</tr>
						<tr>
							<td class="right">Firstname:</td>
							<td>
								<input id="firstname" maxlength="30" name="firstname" oninput="text1()" placeholder="If you have second name, please indicate" size="40" type="text" required>
							</td>
						</tr>
						<tr>
							<td class="right">Middlename:</td>
							<td>
								<input id="middlename" maxlength="20" name="middlename" oninput="text2()" size="40" type="text" required>
							</td>
						</tr>
						<tr>
							<td class="right">Lastname:</td>
							<td>
								<input id="lastname" maxlength="25" name="lastname" oninput="text1()" size="40" type="text" required>
							</td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td class="right">Gender: </td>
							<td align="center" class="center">
								<input id="male" name="gender" type="radio" value="Male" required>Male
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input id="female" name="gender" type="radio" value="Female" required>Female
								&nbsp; &nbsp; &nbsp;
							</td>
						</tr>
						<tr>
							<td class="right">Birthdate:</td>
							<td>
								<select id="numMonths" name="numMonths" onblur="validation3()"></select>
								<select id="numDays" name="numDays" onblur="validation3()"></select>
								<select id="numYears" name="numYears"></select>
							</td>
						</tr>
						<tr>
							<td class="right">Age:</td>
							<td>
								<input id="age" maxlength="3" name="age" onblur="validation3()" oninput="num1()" size="40" type="text" required>
							</td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td class="right">Full Address:</td>
							<td>
								<input id="address" maxlength="60" name="address" size="40" type="text" required>
							</td>
						</tr>
						<tr>
							<td class="right">Number:</td>
							<td>
								<input id="number" maxlength="11" name="number" onblur="validation3()" oninput="num3()" placeholder="Cellphone and/or Telephone Number" size="40" type="text" required>
							</td>
						</tr>
						<tr>
							<td class="right">Facebook:</td>
							<td>
								<input id="facebook" maxlength="35" name="facebook" placeholder="Facebook Name or Email Address" size="40" type="text" required>
							</td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>	
						<tr>
							<td class="right">Mother's Name:</td>
							<td>
								<input id="mother" maxlength="40" name="mother" oninput="text2()" placeholder="Full Name" size="40" type="text" required>
							</td>
						</tr>
						<tr>
							<td class="right">Father's Name:</td>
							<td>
								<input id="father" maxlength="40" name="father" oninput="text2()" placeholder="Full Name" size="40" type="text" required>
							</td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
						<tr align="center">
							<td colspan="3">
								<input id="certify" name="certify" onclick="validation3()" type="checkbox" value="certify">
								I certify that the informations I stated are all true and correct
							</td>
						</tr>
						<tr class="right">
							<td colspan="2">
								<input id="btnreserve" name="btnreserve" type="submit" value="RESERVE"> &nbsp; &nbsp;
							</td>
						</tr>
					</table>
				</form>
				<iframe class="storage" name="storage" style="position: fixed; visibility: hidden"></iframe>
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

	if (isset($_POST['btnreserve'])) {
		require('connection.php');

		$id_rand = rand(1000000, 9999999);
		$fname = $_POST['firstname'];
		$mname = $_POST['middlename'];
		$lname = $_POST['lastname'];
		$user_gender = $_POST['gender'];
		$month = $_POST['numMonths'];
		$day = $_POST['numDays'];
		$year = $_POST['numYears'];
		$birthday = $month . " " . $day . ", " . $year;
		$user_age = $_POST['age'];
		$addr = $_POST['address'];
		$num = $_POST['number'];
		$fb = $_POST['facebook'];
		$mothers = $_POST['mother'];
		$fathers = $_POST['father'];
		$ct = $_POST['certify'];

		if (($month == "February" && $day > 29) || ($month == "April" && $day > 30) || ($month == "June" && $day > 30) || 
			($month == "September" && $day > 30) || ($month == "November" && $day > 30)) {
			echo "<script>alert('That is not a valid birthdate.')</script>";
		}
		else {
			if ($user_age > 10) {
				if (strlen($num) >= 7) {
					if ($ct == 'certify') {
						$sqlSave = "INSERT INTO tbl_reservation(id, time, firstname, middlename, lastname, gender, birthdate, 
							age, address, ct_number, facebook, mother, father) 
						VALUES($id_rand, Now(), '$fname', '$mname', '$lname', '$user_gender', '$birthday', 
							$user_age, '$addr', $num, '$fb', '$mothers', '$fathers')";

						mysqli_query($link, $sqlSave);
						echo "<script>alert('You slot has been reserved. Please follow up your requirements to fully enroll.')</script>";
					}
					else {
						echo "<script>alert('Please certify that the informations you stated are all true and correct.')</script>";
					}
				}
				else {
					echo "<script>alert('That is not a valid cellphone or telephone number.')</script>";
				}
			}
			else {
				echo "<script>alert('You are too young.')</script>";
			}
		}
	}

?>