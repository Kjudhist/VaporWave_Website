<?php
include('koneksi.php');
 if(isset($_POST['post'])){
    $art = $_POST['art'];
    $deskripsi = $_POST['deskripsi'];
    session_start();
    $username = $_SESSION['username'];
    if (empty($_SESSION['username'])){
        header("location:home.php");
    }else{
        $post = mysqli_query($con,"INSERT INTO postingan VALUES ('$deskripsi', '$username', '$art')") or die(mysql_error());
    }
    header('location:home.php'); 
}
?>