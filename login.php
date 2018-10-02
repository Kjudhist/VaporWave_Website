<?php 
include 'koneksi.php';
session_start();
if (isset($_POST['email']) and isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "SELECT * FROM user WHERE email='$email' and password='$password'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
	$count = mysqli_num_rows($result);
if ($count == 1){
	$_SESSION['email'] = $email;
}else{
	$fmsg = "Invalid Login Credentials.";
	}
}
if (isset($_SESSION['email'])) {
	echo '<script type="text/javascript">alert("Login berhasil")</script>';
	echo("<script>window.location = 'coba.php';</script>");
}else{
	echo "login gagal";
}