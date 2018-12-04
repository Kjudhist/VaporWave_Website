
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>VAPORWAVE</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700,800" rel="stylesheet" type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>css/styleProfilEdit.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">


  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="<?php echo base_url()?>assets/js/ie-emulation-modtes-warning.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
  
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

<body>
    <section class="sec1">
        <div style="height: 15%">
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo base_url()?>index.php/logincontrol/login_authentication">Home</a>
                    </li>
                    <li>
                        <a href="About.html">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/logincontrol/upload_page" class="active">Upload</a>
                    </li>
                    <li>
                        <a href="profile.php">Profile</a>
                    </li>
                </ul>
            </nav>
        </div>
        <center>
            <div class="portfoliocard">
                <div class="coverphoto"></div>
                <div class="profile_picture">
                </div>
                <div class="left_col">
                </div>
                <div class="right_col">
                    <h2 class="name">_</h2>
                    <h3 class="location">_</h3>
                    <?php echo form_open_multipart('logincontrol/do_upload');?>
                    <form id="edit" method="POST">
                    <table>
                        <tr>
                            <td>
                                <ul class="information">
                                    <li>deskripsi</li>
                                    <li>upload file</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="contact_information">
                                    <li class="formDiv">
                                        <input type="text" placeholder="caption" name="caption"/>
                                    </li>
                                    <li class="formDiv">
                                        <input type="file" name="userfile"/>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table><br>
                    <div class="formDiv">
                    <input type="submit" value="upload" name="upload"/></div>
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