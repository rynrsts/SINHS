<html>

<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="design2.css">

	<style type="text/css">
		#main {
			padding-bottom: 60px;
			padding-top: 60px;
		}

		@media only screen and (max-width: 1200px) {
			#main { 
				padding-bottom: 30px;
			}
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
			<div id="gallery">
				<div class="polaroid">
					<a href="Gallery1.php"><div class="picture" id="annex"></div></a>
					<div class="caption">OPENING OF NEW BUILDING - ANNEX</div>
				</div>
				<div class="polaroid">
					<a href="Gallery2.php"><div class="picture" id="brigada"></div></a>
					<div class="caption">BRIGADA ESKWELA</div>
				</div>
				<div class="polaroid">
					<a href="Gallery3.php"><div class="picture" id="principal"></div></a>
					<div class="caption">PRINCIPAL'S BIRTHDAY</div>
				</div>
				<div class="polaroid">
					<a href="Gallery4.php"><div class="picture" id="sabayan"></div></a>
					<div class="caption">SABAYANG PAGBIGKAS</div>
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