<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ERMS</title>
	<link rel="stylesheet" href="../css/user_signin.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#fdfdff">
</head>
<body>
	<div class="container-fluid main">
		<div class="h2 text-center header">Employee Record Management System</div>
		<div class="row root">
			<!-- Left side sub-root -->
			<div class="col-6 left_sub_root"></div>

			<!-- Right side sub-root -->
			<div class="col-6 d-flex justify-content-center right_sub_root">
				<div class="d-flex justify-content-center align-items-center flex-column child_root">
					<div class="h2 text-center">Welcome Back</div>

					<div>
						<input type="email" class="form-control email" name="email" placeholder="Enter Email Address">
					</div>

					<div>
						<input type="password" class="form-control password" name="password" placeholder="Password">
					</div>

					<div>
						<button type="submit" class="btn btn-primary submit" name="submit">Login</button>
					</div>
					<div>
						<a href="#" class="btn d-block text-primary forget">Forget Password?</a>
						<a href="#" class="btn d-block text-primary">Create an account</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>