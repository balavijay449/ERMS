<?php
$db=new mysqli('localhost','root','','erms') or die("no connect");

$email = $_SESSION["email"];

// update the data.......

if (isset($_POST['update'])) {
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$dept = $_POST['dept'];
	$designation = $_POST['designation'];
	$mobile = $_POST['mobile'];
	$join_date = $_POST['join_date'];

	$update_sql = "UPDATE user_login SET f_name = '$f_name', l_name = '$l_name', dept = '$dept', designation = '$designation', mobile = '$mobile', join_date = '$join_date' WHERE email = '$email'";
	if($update_result = $db->query($update_sql)){
		echo "<script>alert('Your details update successfully!');</script>";
	}
	else{
		echo "<script>alert('update faild! please enter valid data');</script>";
	}
}

// Displaying datas.......

$select_sql = "SELECT * FROM user_login WHERE email = '$email'";
$select_result = $db->query($select_sql);
while ($row = $select_result->fetch_assoc()) {
	$f_name = $row['f_name'];
	$l_name = $row['l_name'];
	$e_code = $row['e_code'];
	$dept = $row['dept'];
	$designation = $row['designation'];
	$mobile = $row['mobile'];
	$join_date = $row['join_date'];
}

?>