<?php

$db=new mysqli('localhost','root','','erms') or die("no connect");

if (isset($_POST['submit'])) {
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$e_code = $_POST['e_code'];
	$email = $_POST['email'];
	$n_pass = $_POST['n_password'];
	$r_pass = $_POST['r_password'];
	if ($f_name == "" || $l_name == "" || $e_code == "" || $email == "" || $n_pass == "" || $r_pass == "") {
		echo "<script>alert('please fill all the details');</script>";
	}
	elseif (strlen($n_pass) <= 5) {
		echo "<script>alert('Password minimum 6 characters');</script>";
	}
	elseif ($n_pass != $r_pass) {
		echo "<script>alert('Password Mismatch');</script>";
	}
	else{
		
		$insert_all = "INSERT INTO user_login (f_name, l_name, e_code, email, password) VALUES ('$f_name', '$l_name', '$e_code', '$email', '$n_pass')";
		if ($db -> query($insert_all)) {
			header("Location: welcome_screen.php");
   			exit;
		}
		else{
			echo "<script>alert('Email id (or) Employee code already exists');</script>";
		}

	}
}
?>