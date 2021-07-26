<!DOCTYPE html>
<html>

<head>
	<title>Admin</title>
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
				<li class="breadcrumb-item">Dashboard</li>
			</ol>

			<!-- Icon Cards-->
			<div class="row">
				<div class="col-xl-3 col-sm-6 mb-3">
					<div class="card text-white bg-primary o-hidden h-100">
						<a class="mynav" href="Accounts.php">Accounts</a>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 mb-3">
					<div class="card text-white bg-warning o-hidden h-100">
						<a class="mynav" href="Login Trail.php">Login Trail</a>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 mb-3">
					<div class="card text-white bg-success o-hidden h-100">
					 <a class="mynav" href="Messages.php"> Messages</a>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 mb-3">
					<div class="card text-white bg-danger o-hidden h-100">
						<a class="mynav" href="Reserved Students.php">Reservation</a>
					</div>
				</div>
			</div>
			
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i> History Count</div>
					<div class="table-responsive">
						<table class="table table-bordered" width="100%" cellspacing="0">
							<thead>
								<tr>
									<td align="center"><b>Registered Accounts</b></td>
									<td align="center"><b>Login</b></td>
									<td align="center"><b>Messages</b></td>
									<td align="center"><b>Reservations</b></td>
								</tr>
							</thead>
							<tbody>

								<!-- PHP -->
								<?php
									require('connection.php');

									$sqlView1 = "SELECT COUNT(id) FROM tbl_register";
									$result1 = mysqli_query($link, $sqlView1);

									while ($row = mysqli_fetch_array($result1)) {
										echo "<tr>
											<td align=center>" . $row['COUNT(id)'] . "</td>
										";
									}

									$sqlView2 = "SELECT COUNT(id) FROM tbl_login";
									$result2 = mysqli_query($link, $sqlView2);

									while ($row = mysqli_fetch_array($result2)) {
										echo "
											<td align=center>" . $row['COUNT(id)'] . "</td>
										";
									}

									$sqlView3 = "SELECT COUNT(id) FROM tbl_contact";
									$result3 = mysqli_query($link, $sqlView3);

									while ($row = mysqli_fetch_array($result3)) {
										echo "
											<td align=center>" . $row['COUNT(id)'] . "</td>
										";
									}

									$sqlView4 = "SELECT COUNT(id) FROM tbl_reservation";
									$result4 = mysqli_query($link, $sqlView4);

									while ($row = mysqli_fetch_array($result4)) {
										echo "
											<td align=center>" . $row['COUNT(id)'] . "</td>
										</tr>";
									}
								?>

							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<form method="post" action="Admin.php">
							<table class="table table-bordered" width="100%" cellspacing="0">
								<tr>
									<td align="center" colspan="3"><b>INDEX</b></td>
								</tr>

								<!-- PHP -->
								<?php

									require('connection.php');

									$sqlViews1 = "SELECT * FROM tbl_title";
									$results1 = mysqli_query($link, $sqlViews1);

									$sqlViews2 = "SELECT * FROM tbl_index WHERE id = 1";
									$results2 = mysqli_query($link, $sqlViews2);

									$sqlViews3 = "SELECT * FROM tbl_index WHERE id = 2";
									$results3 = mysqli_query($link, $sqlViews3);

									while ($rows1 = mysqli_fetch_array($results1)) {
										echo "
												<tr>
													<td><input class=titlearea name=ftitle type=text value=" . $rows1['first'] . "></td>
													<td><input class=titlearea name=stitle type=text value=" . $rows1['second'] . "></td>
													<td><input class=titlearea name=ttitle type=text value=" . $rows1['third'] . "></td>
												</tr>
										";
									}
									while ($rows2 = mysqli_fetch_array($results2)) {
										echo "
												<tr>
													<td><textarea class=txtarea name=ftext1>" . $rows2['first'] . "</textarea></td>
													<td><textarea class=txtarea name=stext1>" . $rows2['second'] . "</textarea></td>
													<td><textarea class=txtarea name=ttext1>" . $rows2['third'] . "</textarea></td>
												</tr>
										";
									}
									while ($rows3 = mysqli_fetch_array($results3)) {
										echo "
												<tr>
													<td><textarea class=txtarea name=ftext2>" . $rows3['first'] . "</textarea></td>
													<td><textarea class=txtarea name=stext2>" . $rows3['second'] . "</textarea></td>
													<td><textarea class=txtarea name=ttext2>" . $rows3['third'] . "</textarea></td>
												</tr>
										";
									}

								?>

							<tr>
								<td align="right" colspan="3">
									<input class="btndelete" name="update1" type="submit" value="Update">
								</td>
							<tr>
						</table>
					</form>
				</div>
				<div class="table-responsive">
						<form method="post" action="Admin.php">
							<table class="table table-bordered" width="100%" cellspacing="0">
								<tr>
									<td align="center" colspan="3"><b>HOME</b></td>
								</tr>

								<!-- PHP -->
								<?php

									require('connection.php');

									$sqlViews11 = "SELECT * FROM tbl_title";
									$results11 = mysqli_query($link, $sqlViews11);

									$sqlViews21 = "SELECT * FROM tbl_home WHERE id = 1";
									$results21 = mysqli_query($link, $sqlViews21);

									$sqlViews31 = "SELECT * FROM tbl_home WHERE id = 2";
									$results31 = mysqli_query($link, $sqlViews31);

									$sqlViews41 = "SELECT * FROM tbl_home WHERE id = 3";
									$results41 = mysqli_query($link, $sqlViews41);

									while ($rows11 = mysqli_fetch_array($results11)) {
										echo "
												<tr>
													<td><input class=titlearea name=ftitle type=text value=" . $rows11['first'] . "></td>
													<td><input class=titlearea name=stitle type=text value=" . $rows11['second'] . "></td>
													<td><input class=titlearea name=ttitle type=text value=" . $rows11['third'] . "></td>
												</tr>
										";
									}
									while ($rows21 = mysqli_fetch_array($results21)) {
										echo "
												<tr>
													<td><textarea class=txtarea name=ftext11>" . $rows21['first'] . "</textarea></td>
													<td><textarea class=txtarea name=stext11>" . $rows21['second'] . "</textarea></td>
													<td><textarea class=txtarea name=ttext11>" . $rows21['third'] . "</textarea></td>
												</tr>
										";
									}
									while ($rows31 = mysqli_fetch_array($results31)) {
										echo "
												<tr>
													<td><textarea class=txtarea name=ftext21>" . $rows31['first'] . "</textarea></td>
													<td><textarea class=txtarea name=stext21>" . $rows31['second'] . "</textarea></td>
													<td><textarea class=txtarea name=ttext21>" . $rows31['third'] . "</textarea></td>
												</tr>
										";
									}
									while ($rows41 = mysqli_fetch_array($results41)) {
										echo "
												<tr>
													<td><textarea class=txtarea name=ftext31>" . $rows41['first'] . "</textarea></td>
													<td><textarea class=txtarea name=stext31>" . $rows41['second'] . "</textarea></td>
													<td><textarea class=txtarea name=ttext31>" . $rows41['third'] . "</textarea></td>
												</tr>
										";
									}

								?>

							<tr>
								<td align="right" colspan="3">
									<input class="btndelete" name="update2" type="submit" value="Update">
								</td>
							<tr>
						</table>
					</form>
				</div>
				<div class="table-responsive">
						<form method="post" action="Admin.php">
							<table class="table table-bordered" width="100%" cellspacing="0">
								<tr>
									<td align="center" colspan="3"><b>ABOUT US</b></td>
								</tr>

								<!-- PHP -->
								<?php

									require('connection.php');

									$sqlViewA1 = "SELECT * FROM tbl_about WHERE id = 1";
									$resultA1 = mysqli_query($link, $sqlViewA1);

									$sqlViewA2 = "SELECT * FROM tbl_about WHERE id = 2";
									$resultA2 = mysqli_query($link, $sqlViewA2);

									$sqlViewA3 = "SELECT * FROM tbl_about WHERE id = 3";
									$resultA3 = mysqli_query($link, $sqlViewA3);

									while ($rowA1 = mysqli_fetch_array($resultA1)) {
										echo "
												<tr>
													<td><textarea class=txtarea name=about1>" . $rowA1['about'] . "</textarea></td>
										";
									}
									while ($rowA2 = mysqli_fetch_array($resultA2)) {
										echo "
													<td><textarea class=txtarea name=about2>" . $rowA2['about'] . "</textarea></td>
										";
									}
									while ($rowA3 = mysqli_fetch_array($resultA3)) {
										echo "
													<td><textarea class=txtarea name=about3>" . $rowA3['about'] . "</textarea></td>
												</tr>
										";
									}

								?>

							<tr>
								<td align="right" colspan="3">
									<input class="btndelete" name="update3" type="submit" value="Update">
								</td>
							<tr>
						</table>
					</form>
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

<!-- PHP -->
<?php

	if (isset($_POST['update1'])) {
		require('connection.php');

		$fti = $_POST['ftitle'];
		$sti = $_POST['stitle'];
		$tti = $_POST['ttitle'];

		$fte1 = $_POST['ftext1'];
		$ste1 = $_POST['stext1'];
		$tte1 = $_POST['ttext1'];

		$fte2 = $_POST['ftext2'];
		$ste2 = $_POST['stext2'];
		$tte2 = $_POST['ttext2'];

		$sqlUpdate1 = "UPDATE tbl_title SET first = '$fti', second = '$sti', third = '$tti'";
		$sqlUpdate2 = "UPDATE tbl_index SET first = '$fte1', second = '$ste1', third = '$tte1' WHERE id = 1";
		$sqlUpdate3 = "UPDATE tbl_index SET first = '$fte2', second = '$ste2', third = '$tte2' WHERE id = 2";

		mysqli_query($link, $sqlUpdate1);
		mysqli_query($link, $sqlUpdate2);
		mysqli_query($link, $sqlUpdate3);
		mysqli_close($link);

		echo "<script>alert('Update successful.')</script>";
		echo "<script>window.location.assign('Admin.php')</script>";
	}

	if (isset($_POST['update2'])) {
		require('connection.php');

		$fti = $_POST['ftitle'];
		$sti = $_POST['stitle'];
		$tti = $_POST['ttitle'];

		$fte11 = $_POST['ftext11'];
		$ste11 = $_POST['stext11'];
		$tte11 = $_POST['ttext11'];

		$fte21 = $_POST['ftext21'];
		$ste21 = $_POST['stext21'];
		$tte21 = $_POST['ttext21'];

		$fte31 = $_POST['ftext31'];
		$ste31 = $_POST['stext31'];
		$tte31 = $_POST['ttext31'];

		$sqlUpdate1 = "UPDATE tbl_title SET first = '$fti', second = '$sti', third = '$tti'";
		$sqlUpdate2 = "UPDATE tbl_home SET first = '$fte11', second = '$ste11', third = '$tte11' WHERE id = 1";
		$sqlUpdate3 = "UPDATE tbl_home SET first = '$fte21', second = '$ste21', third = '$tte21' WHERE id = 2";
		$sqlUpdate4 = "UPDATE tbl_home SET first = '$fte31', second = '$ste31', third = '$tte31' WHERE id = 3";

		mysqli_query($link, $sqlUpdate1);
		mysqli_query($link, $sqlUpdate2);
		mysqli_query($link, $sqlUpdate3);
		mysqli_query($link, $sqlUpdate4);
		mysqli_close($link);

		echo "<script>alert('Update successful.')</script>";
		echo "<script>window.location.assign('Admin.php')</script>";
	}
	
	if (isset($_POST['update3'])) {
		require('connection.php');

		$a1 = $_POST['about1'];
		$a2 = $_POST['about2'];
		$a3 = $_POST['about3'];

		$sqlUpdate1 = "UPDATE tbl_about SET about = '$a1' WHERE id = 1";
		$sqlUpdate2 = "UPDATE tbl_about SET about = '$a2' WHERE id = 2";
		$sqlUpdate3 = "UPDATE tbl_about SET about = '$a3' WHERE id = 3";

		mysqli_query($link, $sqlUpdate1);
		mysqli_query($link, $sqlUpdate2);
		mysqli_query($link, $sqlUpdate3);
		mysqli_close($link);

		echo "<script>alert('Update successful.')</script>";
		echo "<script>window.location.assign('Admin.php')</script>";
	}

?>
