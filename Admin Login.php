<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Login</title>
	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="design4.css" rel="stylesheet">
</head>

<body class="bg-dark">

	<div class="header">
		<div class="logo"></div>
	</div>
	
	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header">Login</div>
			<div class="card-body">
				<form method="post" action="Admin Login.php">
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" name="adminuser" type="text" placeholder="Enter username" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" name="adminpass" type="password" placeholder="Password" required>
					</div>
					<div class="form-group">
					</div>
					<input class="btn btn-primary btn-block" name="admnlogin" type="submit" value="Login">
				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<!-- PHP -->
<?php
	if (isset($_POST['admnlogin'])) {
		require('connection.php');

		$user = $_POST['adminuser'];
		$pass = $_POST['adminpass'];
		$record = true;

		$sqlView = "SELECT username, password FROM tbl_admin";
		$result = mysqli_query($link, $sqlView);

		while ($row = mysqli_fetch_array($result)) {      
			if ($user == $row['username'] && $pass == $row['password']) {
				echo "<script>alert('Welcome!')</script>";
				echo "<script>window.location.assign('Admin.php')</script>";

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