<?php
include ("koneksi.php");
if(isset($_POST['save'])){
    $oldpass   = $_POST['oldpass'];
    $newpass   = $_POST['newpass'];
    
    session_start();
    $us=$_SESSION['username'];
    if (empty($_SESSION['username'])){
        header("location:password.php");
    }else{
        $q=mysqli_query($con,"UPDATE user SET sandi='$newpass' where username='$us'");
        if($q){
            header('location:profile.php');
        }else{
            header('location:profilEdit.php');
        }
    }  
}
?>