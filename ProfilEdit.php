<?php
include ("koneksi.php");
session_start();
    if (empty($_SESSION['username'])){
        header("location:loginRegister.php");
    }else{
        $q=mysqli_query($con, "select * from user where username='".$_SESSION['username']."'");
        $r=$q->fetch_array();
        $_SESSION['blog'] = $r['blog'];
        $_SESSION['email'] = $r['email'];
        $_SESSION['birthday'] = $r['birthday'];
        $_SESSION['phone'] = $r['phone'];
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
                <div class="coverphoto"></div>
                <div class="profile_picture" style="background-image: url(media/3.jpg)">
                </div>
                <div class="left_col">
                </div>
                <div class="right_col">
                    <h2 class="name">_</h2>
                    <h3 class="location">_</h3>
                    <form id="edit" action="update.php" method="POST">
                    <table>
                        <tr>
                            <td>
                                <ul class="information">
                                    <li>username</li>
                                    <li>blog</li>
                                    <li>birthday</li>
                                    <li>email</li>
                                    <li>Phone</li>
                                    <li>Confirm Password</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="contact_information">

                                    <li class="formDiv">
                                        <input type="text" placeholder="<?php echo $_SESSION['username']?>" name="username"/ required></li>
                                    <li class="formDiv">
                                        <input type="text" placeholder="<?php echo $_SESSION['blog']?>" name="blog"/></li>
                                    </li>
                                    <li class="formDiv">
                                        <input type="text" placeholder="<?php echo $_SESSION['birthday']?>" name="birthday"/></li>
                                    </li>
                                    <li class="formDiv">
                                        <input type="email" placeholder="<?php echo $_SESSION['email']?>" name="email"/></li>
                                    <li class="formDiv">
                                            <input type="text" placeholder="<?php echo $_SESSION['phone']?>" name="phone"/></li>
                                    <li class="formDiv">
                                        <input type="password" placeholder="Password" name="password"/ required>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <div class="formDiv">
                    <input type="submit" value="Save Data" name="save" href="update.php"/></div>
                    </form>
                </div>
            </div>
        </center>
    </section>
    <section class="sec3"></section>
    <section class="sec4"></section>
    <section class="sec5"></section>
</body>
</html>