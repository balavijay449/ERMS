<?php
$db=new mysqli('localhost','root','','erms') or die("no connect");
session_start();
if (!isset($_SESSION['admin_name'])) {
	header("location: admin_signin.php");
}
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
					<div class="btn-primary text-center py-2 dashboard">
						<img src="../images/user-experience.png" height="20">
						<a href="#" class="btn text-light pl-1 stretched-link">All Employees</a>
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
					<h5 class="mr-1"><?php echo $_SESSION['admin_name']; ?></h5>
					<button type="button" class="btn"><img src="../images/man.png" height="40"></button>
				</div>
				<div class="right_sub">
					<h3 class="m-3">Employee Record Management System</h3>
					<div class="d-flex justify-content-center mt-4 user_box">
						<div class="d-flex justify-content-between align-items-center p-3 rounded user_name">
							<div class="float-left">
								<div class="welcome">Welcome back to ERMS :</div>
								<div class="name"><?php echo $_SESSION['admin_name']; ?></div>
							</div>
							<img src="../images/user.png" height="30">					
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>