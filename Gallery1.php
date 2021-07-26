<html>

<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="design2.css">

	<style type="text/css">
		#main {
			padding-bottom: 60px;
			padding-top: 60px;
		}
	</style>
</head>

<body>

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
			<table border="0" cellpadding="0" cellspacing="15" id="gallery">
				<tr>
					<td class="center" colspan="4"><h1>OPENING OF NEW BUILDING - ANNEX</h1></td>
				</tr>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" class="polaroid2">
							<tr>
								<td class="center">
									<img class="picture" src="Annex/1.jpg">
								</td>
							</tr>
						</table>
					</td>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" class="polaroid2">
							<tr>
								<td class="center">
									<img class="picture" src="Annex/2.jpg">
								</td>
							</tr>
						</table>
					</td>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" class="polaroid2">
							<tr>
								<td class="center">
									<img class="picture" src="Annex/3.jpg">
								</td>
							</tr>
						</table>
					</td>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" class="polaroid2">
							<tr>
								<td class="center">
									<img class="picture" src="Annex/4.jpg">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" class="polaroid2">
							<tr>
								<td class="center">
									<img class="picture" src="Annex/5.jpg">
								</td>
							</tr>
						</table>
					</td>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" class="polaroid2">
							<tr>
								<td class="center">
									<img class="picture" src="Annex/6.jpg">
								</td>
							</tr>
						</table>
					</td>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" class="polaroid2">
							<tr>
								<td class="center">
									<img class="picture" src="Annex/7.jpg">
								</td>
							</tr>
						</table>
					</td>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" class="polaroid2">
							<tr>
								<td class="center">
									<img class="picture" src="Annex/8.jpg">
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>

		<div class="copyright">
			Copyright &copy; SINHS 2018
		</div>
	</div>

	<script src="function.js"></script>

</body>

</html>