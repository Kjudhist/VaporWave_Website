<?php
include ("koneksi.php");
session_start();
    if (empty($_SESSION['username'])){
        header("location:loginRegister.php");
    }else{
        $q=mysqli_query($con, "select * from postingan where username='".$_SESSION['username']."'");
        $r=$q->fetch_array();
        $_SESSION['deskripsi'] = $r['deskripsi'];
        $_SESSION['uploaded'] = $r['uploaded'];
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleProfilEdit.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700,800' rel='stylesheet'
        type='text/css'>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(window).on('scroll', function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
        $(".hover").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );
    </script>
    <title></title>
</head>

<body>
    <section class="sec1">
        <div style="height: 15%">
            <nav>
                <div class="logo">
                    <img src="media/LogoColor.png">
                </div>
                <ul>
                    <li>
                        <a href="home.php" class="active">Home</a>
                    </li>
                    <li>
                        <a href="About.html">About</a>
                    </li>
                    <li>
                        <a href="upload.php">Upload</a>
                    </li>
                    <li>
                        <a href="profile.php">Profile</a>
                    </li>
                </ul>
            </nav>
        </div> 
        <center>
        <table>
            <tr>
                <td>
                    <center>
                    <?php 
                    echo $_SESSION['username']."<br>";
                    echo $_SESSION['deskripsi']."<br>";
                    ?>
                    <img src ="<?php echo $_SESSION['uploaded'];?>" height=500 width=500>
                </td>
            </tr>
        </table>
    </center>
    </section>
    <section class="sec3"></section>
    <section class="sec4"></section>
    <section class="sec5"></section>
</body>
</html>