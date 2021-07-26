<!DOCTYPE html>
<html>
	
<head>
	<title>Edit Account Data</title>
	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin CSS-->
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="design4.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="Admin.php"><img class="thelogo" src="Logo.png"></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
					<a class="nav-link" href="Admin.php">
						<i class="fa fa-fw fa"></i>
						<span class="nav-link-text">Dashboard</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Accounts">
					<a class="nav-link" href="Accounts.php">
						<i class="fa fa-fw fa"></i>
						<span class="nav-link-text">Accounts</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Login Trail">
					<a class="nav-link" href="Login Trail.php">
						<i class="fa fa-fw fa"></i>
						<span class="nav-link-text">Login Trail</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
					<a class="nav-link" href="Messages.php">
						<i class="fa fa-fw fa"></i>
						<span class="nav-link-text">Messages</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reservation">
					<a class="nav-link" href="Reserved Students.php">
						<i class="fa fa-fw fa"></i>
						<span class="nav-link-text">Reservation</span>
					</a>
				</li>
			</ul>
			 <ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-fw fa-sign-out"></i>Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="content-wrapper">
		<div class="container-fluid">

			<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Account</li>
			</ol>
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i> Edit Account Data</div>
				<div class="card-body">
					<div class="table-responsive">

						<!-- PHP -->
						<?php
							require('connection.php');
							require('getAddress.php');

							$sqlView = "SELECT * FROM tbl_register WHERE id=$idNo[1]";
							$result = mysqli_query($link, $sqlView);

							while ($row = mysqli_fetch_array($result)) {
						 ?>

						<form method=post action=UpdateAcc.php>
							<table border=0 class="tbledit" cellpadding=10 cellspacing=0>
								<tr>
									<td>ID:</td>
									<td><input class=txtedit name=id type=text value=<?php echo $row['id']; ?> readonly> </td>
								</tr>
								<tr>
									<td>Firstname:</td>
									<td><input class=txtedit name=fname type=text value=<?php echo $row['firstname']; ?>> </td>
								</tr>
								<tr>
									<td>Lastname:</td>
									<td><input class=txtedit name=lname type=text value=<?php echo $row['lastname']; ?>> </td>
								</tr>
								<tr>
									<td>Age:</td>
									<td><input class=txtedit name=age type=text value=<?php echo $row['age']; ?>> </td>
								</tr>
								<tr>
									<td>Username:</td>
									<td><input class=txtedit name=uname type=text value=<?php echo $row['username']; ?>> </td>
								</tr>
								<tr>
									<td>Password:</td>
									<td><input class=txtedit name=pword type=text value=<?php echo $row['password']; ?>> </td>
								</tr>
								<tr>
									<td align=right colspan=2><input class=btndelete name=update type=submit value=Update></td>
								</tr>
							</table>
						</form>

						<!-- PHP -->
						<?php
							}
						?>

					</div>
				</div>
			</div>
		</div>

		<!-- /.container-fluid-->
		<!-- /.content-wrapper-->
		<footer class="sticky-footer">
			<div class="container">
				<div class="text-center">
					<small>Copyright &copy; SINHS 2018</small>
				</div>
			</div>
		</footer>

		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fa fa-angle-up"></i>
		</a>

		<!-- Logout Modal-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="Admin Login.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Page level plugin JavaScript-->
	<script src="vendor/chart.js/Chart.min.js"></script>
	<script src="vendor/datatables/jquery.dataTables.js"></script>
	<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin.min.js"></script>
	<!-- Custom scripts for this page-->
	<script src="js/sb-admin-datatables.min.js"></script>
	<script src="js/sb-admin-charts.min.js"></script>
	
</body>

</html>
