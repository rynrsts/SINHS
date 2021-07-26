<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="design1.css">

	<style type="text/css">
		#main {
			padding-bottom: 80px;
			padding-top: 80px;
		}

		input[type="text"], input[type="password"] {
			border: 0px;
			border-radius: 2px;
			font-family: candara;
			font-size: 15px;
			padding: 12px;
			width: 320px;
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
			<div id="divlogin">
				<form method="post" action="Login.php">
					<table border="0" id="login" cellpadding="10" cellspacing="0" >
						<tr class="center">
							<td colspan="2"><h1>SIGN IN</h1></td>
						</tr>
						<tr>
							<td>Username:</td>
						</tr>
						<tr>
							<td>
								<input id="username" name="username" maxlength="20" oninput="userlogin()" type="text" required>
							</td>
						</tr>
						<tr>
							<td>Password:</td>
						</tr>
						<tr>
							<td>
								<input id="password" name="password" maxlength="20" type="password" required>
							</td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
						<tr class="center">
							<td colspan="2">
								<input id="btnlogin" name="btnlogin" onclick="login()" type="submit" value="SIGN IN">
							</td>
						</tr>
						<tr class="center">
							<td>
								No account yet? <a href="Register.php">Register here</a>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>

		<div class="copyright">
			Copyright &copy; SINHS 2018
		</div>
	</div>

	<!-- Custom JavaScript -->
	<script src="function.js"></script>

</body>

</html>

<!-- PHP -->
<?php
	if (isset($_POST['btnlogin'])) {
		require('connection.php');

		$id_rand = rand(1000000, 9999999);
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$record = true;

		$sqlView = "SELECT id, firstname, lastname, username, password FROM tbl_register";
		$result = mysqli_query($link, $sqlView);

		while ($row = mysqli_fetch_array($result)) {
			$fname = $row['firstname'];
			$lname = $row['lastname'];
			$uname = $row['username'];
			$pword = $row['password'];
			
			if ($user == $row['username'] && $pass == $row['password']) {
				$sqlSave = "INSERT INTO tbl_login(id, firstname, lastname, username, password, time) 
				VALUES($id_rand, '$fname', '$lname', '$uname', '$pword', Now())";

				mysqli_query($link, $sqlSave);
				echo "<script>alert('Welcome!')</script>";
				echo "<script>window.location.assign('Home.php')</script>";

				$record = true;
			}
			else {
				$record = false;
			}
		}
		if ($record == false) {
			echo "<script>alert('Incorrect username and/or password.')</script>";
		}
	}
?>
