<html>

<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="design1.css">

	<style type="text/css">
		#main {
			padding-bottom: 80px;
			padding-top: 80px;
		}

		input[type="text"], input[type="date"], input[type="password"] {
			border: 1px solid #DDDFE2;
			border-radius: 1px;
			font-family: candara;
			font-size: 15px;
			padding: 8px;
			width: 320px;
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
			<div align="right" id="divregister">
				<form method="post" id="myTarget">
					<table border="0" id="register" cellpadding="7" cellspacing="0" >
						<tr class="center">
							<td colspan="2"><h1>REGISTER</h1></td>
							<td></td>
						</tr>
						<tr>
							<td>Firstname:</td>
							<td>
								<input id="firstname" maxlength="30" name="firstname" oninput="text1()" type="text" required>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>Lastname:</td>
							<td>
								<input id="lastname" maxlength="25" name="lastname" oninput="text1()" type="text" required>
							</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td>Age:</td>
							<td>
								<input id="age" maxlength="3" name="age" onblur="validation1()" oninput="num1()" type="text" required>
							</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td>Username:</td>
							<td>
								<input id="username1" maxlength="20" name="username1" onblur="validation1()" oninput="username()" type="text" required>
							</td>
							<td class="center" id="usercheck"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td>
								<input id="password1" maxlength="20" name="password1" onblur="validation1()" oninput="password()" type="password" required>
							</td>
							<td class="center" id="passcheck"></td>
						</tr>
						<tr>
							<td>Confirm Password:</td>
							<td>
								<input id="password2" maxlength="20" name="password2" onblur="validation1()" oninput="password()" type="password" required>
							</td>
							<td class="center" id="passconfirm"></td>
						</tr>
						<tr>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td colspan="3"></td>
						</tr>
						<tr align="right">
							<td colspan="2">
								<input id="btnregister" name="btnregister" type="submit" value="REGISTER">
							</td>
						</tr>
					</table>
				</form>
				<iframe class="storage" name="storage"></iframe>
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

	if (isset($_POST['btnregister'])) {
		require('connection.php');

		$id_rand = rand(1000000, 9999999);
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$user_age = $_POST['age'];
		$uname = $_POST['username1'];
		$pword1 = $_POST['password1'];
		$pword2 = $_POST['password2'];
		$record = true;

		if ($user_age > 10) {
			if (strlen($uname) >= 8 && strlen($pword1) >= 7) {
				if ($pword1 == $pword2) {
					$sqlView = "SELECT firstname, lastname, username FROM tbl_register";
					$result = mysqli_query($link, $sqlView);

					while ($row = mysqli_fetch_array($result)) {							
						if (($fname != $row['firstname'] || $lname != $row['lastname']) && $uname != $row['username']) {
							$record = true;
						}
						else {
							$record = false;
						}
					}
					if ($record == true) {
						$sqlSave = "INSERT INTO tbl_register(id, firstname, lastname, age, username, password) 
						VALUES($id_rand, '$fname', '$lname', $user_age, '$uname', '$pword1')";

						mysqli_query($link, $sqlSave);

						echo "<script>alert('You have successfully registered. Please use your username and password to login.')</script>";
						echo "<script>window.location.assign('Login.php')</script>";
					}
					else {
						echo "<script>alert('The data you input already existed.')</script>";
					}
				}
				else {
					echo "<script>alert('Your password in the first field does not match to the second field.')</script>";
				}
			}
			else {
				echo "<script>alert('Your username and/or password is/are bad. Try to make it longer.')</script>";
			}
		}
		else {
			echo "<script>alert('You are too young.')</script>";
		}
	}

?>
