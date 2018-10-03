<?php
include("koneksi.php");
    session_start();
    if (empty($_SESSION['username'])){
        header("location:loginRegister.php");
    }else{
        $q=mysqli_query($con, "DELETE from user where username='".$_SESSION['username']."'");
    }
    if($q){
        header('location:loginRegister.php');
     }else{
        header('location:delete.php');
     }
?>