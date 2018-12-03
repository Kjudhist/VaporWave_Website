<?php
 include('koneksi.php');
 if(isset($_POST['register'])){
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

 $input = mysqli_query($con,"INSERT INTO user VALUES ('$user','$email', '$pass', NULL, NULL, NULL)") or die(mysql_error());
 
 if($input){
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    $login = mysqli_query($con,"select * from user where username='$username' and sandi='$password'");
    $cek = $login->fetch_object();
    session_start();
    $_SESSION['username'] = $username;
    header('location:profile.php');
 }else{
  header('location:regist.php');
 }
}
?>