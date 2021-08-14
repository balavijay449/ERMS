<?php 

$db=new mysqli('localhost','root','','erms') or die("no connect");

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$sql = "SELECT email, password FROM user_login WHERE email = '$email' AND password = '$pass'";
	$result = $db->query($sql);
	if ($result->num_rows == 1) {
		header("Location: welcome_screen.php");
   		exit;
	}
	else{
		echo "<script>alert('Email or Password is incorrect');</script>";
	}
}

?>