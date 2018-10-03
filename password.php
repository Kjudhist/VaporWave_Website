<?php
include ("koneksi.php");
    session_start();
    if (empty($_SESSION['username'])){
        header("location:loginRegister.php");
    }else{
        $q=mysqli_query($con, "select * from user where username='".$_SESSION['username']."'");
        $r=$q->fetch_array();
        $_SESSION['password'] = $r['sandi'];
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/stylePassword.css">
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
        <div style="height: 40%">
            <nav>
                <div class="logo">
                    <img src="media/LogoColor.png">
                </div>
                <ul>
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="About.html">About</a>
                    </li>
                    <li>
                        <a href="upload.php">Upload</a>
                    </li>
                    <li>
                        <a href="profile.php" class="active">Profile</a>
                    </li>
                </ul>
            </nav>
        </div>
        <center>
            <div class="portfoliocard">
            <form id="simpan" action="passacc.php" method="post">
                <div class="up_col">
                    <ul class="contact_information">
                        <li class="formDiv">
                            <?php echo $_SESSION['username']?>
                        </li>
                        <li class="formDiv">
                            <input type="password" placeholder="<?php echo $_SESSION['password']?>" name="oldpass"  required/>
                        </li>
                        <li class="formDiv">
                            <input type="password" placeholder="new Password" name="newpass" />
                        </li>
                    </ul>
                </div>
            
                
                    <div class="left_col">
                        <div class="formSimpan">
                            <input type="submit" value="Save" name="save"/>
                        </div>
                    </div>
                </form>
                <form id="delete" action="profile.php" method="post">
                    <div class="right_col">
                        <div class="formBatal">
                            <input type="submit" value="Tidak" />
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </section>
    <section class="sec3"></section>
    <section class="sec4"></section>
    <section class="sec5"></section>
</body>

</html>