<?php 

session_start();

$db=new mysqli('localhost','root','','erms') or die("no connect");

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$sql = "SELECT email, password FROM user_login WHERE email = '$email' AND password = '$pass'";
	$result = $db->query($sql);
	if ($result->num_rows == 1) {
		$name_query = "SELECT f_name, l_name FROM user_login WHERE email = '$email'";
		$name_result = $db->query($name_query);
		$row = $name_result->fetch_assoc();
		$_SESSION['name'] = $row['f_name']." ".$row['l_name'];
		$_SESSION['email'] = $email;
		echo("<script>location.href = 'user_profile.php';</script>");
	}
	else{
		echo "<script>alert('Email or Password is incorrect');</script>";
	}
}

?>