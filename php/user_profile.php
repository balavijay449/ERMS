<?php
$db=new mysqli('localhost','root','','erms') or die("no connect");
session_start();
if (!isset($_SESSION['name'])) {
	header("location: user_signin.php");
}

// including file....
include "db_files/user_profile_data.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ERMS</title>
	<link rel="stylesheet" href="../css/user_profile.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#fdfdff">
</head>
<body>
	<div class="container-fluid main">
		<div class="row root">
			
			<!-- Left side code here -->
			
			<div class="col-2 left_root">
				<!-- header -->
				<div class="header d-flex justify-content-center align-items-center">
					<img src="../images/chat.png" height="30">
					<h4 class="text-light">ERMS</h4>
				</div>
				<!-- dashboard -->
				<div>
					<div class="btn-warning text-center mt-5 py-2 dashboard">
						<img src="../images/dashboard.png" height="20">
						<a href="#" class="btn text-light pl-1 stretched-link">Dashboard</a>
					</div>
					<h6 class="text-light mt-4">INTERFACE</h6>
				</div>
				<!-- interfaces -->
				<div class="titles">
					<div class="btn-primary pl-4 py-2 dashboard">
						<img src="../images/user-experience.png" height="20">
						<a href="#" class="btn text-light pl-1 stretched-link">Experience</a>
					</div>
					<div class="btn-primary pl-4 py-2 dashboard">
						<img src="../images/edit-experience.png" height="20">
						<a href="#" class="btn text-light pl-1 stretched-link">Edit Experience</a>
					</div>
					<div class="btn-primary pl-4 py-2 dashboard">
						<img src="../images/education.png" height="20">
						<a href="#" class="btn text-light pl-1 stretched-link">Education</a>
					</div>
					<div class="btn-primary pl-4 py-2 dashboard">
						<img src="../images/edit-education.png" height="20">
						<a href="#" class="btn text-light pl-1 stretched-link">Edit Education</a>
					</div>
				</div>
				<!-- back button -->
				<div class="back text-center mt-5">
					<a href="#" class="btn"><img src="../images/back.png" height="45" class="back_img"></a>
				</div>
			</div>

			<!-- Right side code here -->
			
			<div class="col-10 p-0 right_root">
				<div class="d-flex justify-content-end align-items-center top_section">
					<h5 class="mr-1"><?php echo $_SESSION['name']; ?></h5>
					<button type="button" class="btn mr-3 profile_btn"><img src="../images/man.png" height="40"></button>
				</div>
				
				<!-- right side bottom Codes... -->

				<div class="right_sub">
					<h3 class="m-3">My Profile</h3>
				</div>

				<form method="post" class="user_details">
					<div>
						<label>First Name</label>
						<input type="text" name="f_name" class="form-control" value="<?php echo $f_name; ?>">
					</div>
					<div>
						<label>Last Name</label>
						<input type="text" name="l_name" class="form-control" value="<?php echo $l_name; ?>">
					</div>
					<div>
						<label>Employee Code</label>
						<input type="text" name="e_code" class="form-control" value="<?php echo $e_code; ?>" disabled>
					</div>
					<div>
						<label>Employee Dept</label>
						<input type="text" name="dept" class="form-control" value="<?php echo $dept; ?>" placeholder="ex. IT">
					</div>
					<div>
						<label>Employee Designation</label>
						<input type="text" name="designation" class="form-control" value="<?php echo $designation; ?>" placeholder="ex. software developer">
					</div>
					<div>
						<label>Employee Contact No.</label>
						<input type="text" name="mobile" class="form-control" value="<?php echo $mobile; ?>" placeholder="Mobile Number">
					</div>
					<div>
						<label>Email</label>
						<input type="text" name="email" class="form-control" value="<?php echo $email; ?>" disabled>
					</div>
					<div>
						<label>Employee joining date</label>
						<input type="text" name="join_date" class="form-control" value="<?php echo $join_date; ?>" placeholder="yyyy-mm-dd">
					</div>
					<div class="text-center">
						<button type="submit" name="update" class="mt-4 btn btn-primary btn_submit" disabled>Update</button>
					</div>
				</form>

				<!-- Toggle -->

				<div class="toggle">
					<a href="user_profile.php" class="btn d-flex toggle_btn_1"><img src="../images/user.png" height="20" class="mr-2">My Profile</a>
					<button class="btn d-flex toggle_btn_2"><img src="../images/user.png" height="20" class="mr-2">Change Password</button>
					<button class="btn d-flex toggle_btn_3"><img src="../images/user.png" height="20" class="mr-2">Logout</button>
				</div>
			</div>
		</div>
	</div>
	<!-- script file -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="../js/user_profile.js"></script>
</body>
</html>