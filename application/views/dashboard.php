<?php
if (isset($this->session->session_data['logged_in'])) {
  $username = ($this->session->session_data['logged_in']['username']);
  $email = ($this->session->session_data['logged_in']['email']);
} else {
  header("location: login2");
}
?>
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

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>css/styleProfilEdit.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">


  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="<?php echo base_url()?>assets/js/ie-emulation-modtes-warning.js"></script>

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
                <a href="home.php" class="active">Home</a>
              </li>
              <li>
                <a href="About.html">About</a>
              </li>
              <li>
                <a href="<?php echo base_url()?>index.php/logincontrol/upload_page">Upload</a>
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
                  echo $this->session->session_data('username');
                  echo $this->session->session_data('email');
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