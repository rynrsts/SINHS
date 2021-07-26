<!DOCTYPE html>
<html>

<head>
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<link rel="stylesheet" type="text/css" href="design1.css">
	<title>Home Page</title>

	<style type="text/css">1
		#main {
			padding-bottom: 60px;
		}

		a {
			color: white;
		}
	</style>
</head>

<body>

	<div class="container">
		<div class="header">
			<a href="Index.php"><img class="logo" src="Logo.png"></div></a>
		</div>

		<div class="navbar">
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td class="navmenu">
						<a href="Index.php"><input class="navbutton" type="submit" value="HOME"></a>
					</td>
					<td class="navmenu">
						<a href="Login.php"><input class="navbutton" type="submit" value="LOGIN"></a>
					</td>
				</tr>
			</table>
		</div>

		<div id="main">
			<div id="sinhsbg"></div>

			<div id="slogan">
				Knowledge and education are the <br> best weapons you can use
			</div>			

			<div id="divs">
				<div class="lmr" id="left">

					<!-- PHP -->
					<?php

						require('connection.php');

						$sqlSelect1 = "SELECT first FROM tbl_title";
						$result1= mysqli_query($link, $sqlSelect1);

						while ($row = mysqli_fetch_array($result1)) {
							echo "<h1 class=title>" . $row['first'] . "</h1>";
						}

						$sqlSelect2 = "SELECT first FROM tbl_index";
						$result2= mysqli_query($link, $sqlSelect2);

						while ($row = mysqli_fetch_array($result2)) {
							echo "<font>" . $row['first'] . "</font>";
							echo "<br><br>";
						}

					?>

				</div>
				<div class="lmr" id="middle">

					<!-- PHP -->
					<?php

						require('connection.php');

						$sqlSelect1 = "SELECT second FROM tbl_title";
						$result1= mysqli_query($link, $sqlSelect1);

						while ($row = mysqli_fetch_array($result1)) {
							echo "<h1 class=title>" . $row['second'] . "</h1>";
						}

						$sqlSelect2 = "SELECT second FROM tbl_index";
						$result2 = mysqli_query($link, $sqlSelect2);

						while ($row = mysqli_fetch_array($result2)) {
							echo "<font>" . $row['second'] . "</font>";
							echo "<br><br>";
						}

					?>

				</div>
				<div class="lmr" id="right">

					<!-- PHP -->
					<?php

						require('connection.php');

						$sqlSelect1 = "SELECT third FROM tbl_title";
						$result1= mysqli_query($link, $sqlSelect1);

						while ($row = mysqli_fetch_array($result1)) {
							echo "<h1 class=title>" . $row['third'] . "</h1>";
						}

						$sqlSelect2 = "SELECT third FROM tbl_index";
						$result2 = mysqli_query($link, $sqlSelect2);

						while ($row = mysqli_fetch_array($result2)) {
							echo "<font>" . $row['third'] . "</font>";
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

</body>

</html>