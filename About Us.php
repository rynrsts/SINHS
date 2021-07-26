<html>

<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="design2.css">

	<style type="text/css">
		#main {
			padding-bottom: 90px;
			padding-top: 80px;
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
			<div id="divabout">
				<div id="picleft"></div>

				<div id="aboutright">
					<h3 class="center">ABOUT SINHS</h3>

					<!-- PHP -->
					<?php

						require('connection.php');

						$sqlSelect = "SELECT about FROM tbl_about";
						$result= mysqli_query($link, $sqlSelect);

						while ($row = mysqli_fetch_array($result)) {
							echo "<font>" . $row['about'] . "</font>";
							echo "<br><br>";
						}

					?>
					
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