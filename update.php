<?php
include("koneksi.php");
if(isset($_POST['save'])){
    $username   = $_POST['username'];
    $blog       = $_POST['blog'];
    $email      = $_POST['email'];
    $birthday   = $_POST['birthday'];
    $phone      = $_POST['phone'];
    $password   = $_POST['password'];
    session_start();
    if (empty($_SESSION['username'])){
        header("location:loginRegister.php");
    }else{
        $q=mysqli_query($con,"UPDATE user SET username='$username', blog='$blog', birthday='$birthday', email='$email', phone='$phone' where sandi='$password'");
    if($q){
        header('location:profile.php');
    }else{
        header('location:profilEdit.php');
    }
    
}   session_destroy();
}
?>