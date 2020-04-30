<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
	header('location:index.php');
}

$password=$_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

$new_password=$_POST['new_password'];
$new_password = mysqli_real_escape_string($con, $new_password);
$new_password = MD5($new_password);

$re_type_password=$_POST['re_type_password'];
$re_type_password = mysqli_real_escape_string($con, $re_type_password);
$re_type_password = MD5($re_type_password);


$query="SELECT email,password FROM users WHERE email = '".$_SESSION['email']."'";
$result=mysqli_query($con,$query) or die($con);

$row=mysqli_fetch_array($result);
$check_password=$row['password'];


if ($new_password!=$re_type_password) {
	header('location: setting.php?error=The new and retype password does not match');
}else{
	if ($password==$check_password) {
		$query = "UPDATE  users SET password = '$new_password' WHERE 	email = '".$_SESSION['email']."'";
		mysqli_query($con,$query) or die(mysqli_error($con));
		header('location: setting.php?error=Password  is Updated');
	}else{
		header('location: setting.php?error=The old password was wrong');
	}
}	
?>
