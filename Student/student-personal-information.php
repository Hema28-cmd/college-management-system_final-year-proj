<!---------------- Session starts form here ----------------------->
<?php  
	session_start();
	if (!isset($_SESSION["LoginStudent"])) {
		header('location:../login/login.php');
		exit();
	}
	require_once "../connection/connection.php";
?>

<!doctype html>
<html lang="en">
<head>
	<title>Student Personal Information</title>
</head>
<body>
	<?php include('../common/common-header.php'); ?>
	<?php include('../common/student-sidebar.php'); ?>  

	<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 w-100">
		<div class="sub-main sub-main-student">
			<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
				<h4 class="">Student Personal Information</h4>
			</div>
			<div class="row ml-4">
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<?php 
						$roll_no = $_SESSION['LoginStudent'];
						$query = "SELECT * FROM student_info WHERE roll_no='$roll_no'";
						$run = mysqli_query($con, $query);
						while ($row = mysqli_fetch_array($run)) { 
					?>

					<div class="row">
						<div class="col-lg-6 col-md-6 pr-5">
							<div class="form-group">
								<label>First Name:</label>
								<p class="form-control-static"><?php echo $row['first_name']; ?></p>
							</div>
						</div>
						<div class="col-md-6 pr-5">
							<div class="form-group">
								<label>Middle Name:</label>
								<p class="form-control-static"><?php echo $row['middle_name']; ?></p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 pr-5">
							<div class="form-group">
								<label>Last Name:</label>
								<p class="form-control-static"><?php echo $row['last_name']; ?></p>
							</div>
						</div>
						<div class="col-md-6 pr-5">
							<div class="form-group">
								<label>Father Name:</label>
								<p class="form-control-static"><?php echo $row['father_name']; ?></p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 pr-5">
							<div class="form-group">
								<label>Mobile:</label>
								<p class="form-control-static"><?php echo $row['mobile_no']; ?></p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 pr-5">
							<div class="form-group">
								<label>Gender:</label>
								<p class="form-control-static"><?php echo $row['gender']; ?></p>
							</div>
						</div>
						<div class="col-md-6 pr-5">
							<div class="form-group">
								<label>Semester:</label>
								<p class="form-control-static"><?php echo $row['semester']; ?></p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 pr-5">
							<div class="form-group">
								<label>Current Address:</label>
								<p class="form-control-static"><?php echo $row['current_address']; ?></p>
							</div>
						</div>
						<div class="col-md-6 pr-5">
							<div class="form-group">
								<label>Permanent Address:</label>
								<p class="form-control-static"><?php echo $row['permanent_address']; ?></p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 pr-5">
							<div class="form-group">
								<label>Place of Birth:</label>
								<p class="form-control-static"><?php echo $row['place_of_birth']; ?></p>
							</div>
						</div>
					</div>

					<?php } // End of while loop ?>

				</div>
			</div>	
		</div>
	</main>

	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
