
<!DOCTYPE html>
<html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {
header("location: http://localhost/vaporwave/index.php/logincontrol/login_authentication");
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sistem Informasi Persewaan Kamar</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url()?>assets/js/ie-emulation-modtes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="<?php echo base_url()?>js/scriptLogReg.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style> 
    body {
      background-color: red;
      opacity: 0.75;
      filter: Alpha(opacity=50); /* IE8 and earlier */
    }
  </style>
  </head>

  <body background="<?php echo base_url()?>img/b.jpg">

    <div class="container">
      <center>
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-primary">

              <div class="panel-heading">
                <h2><span ></span>VAPORWAVE</h2>
              </div>

              <div class="panel-body">
                <!--<div class="alert alert-success">
                  Masukkan username dan password dengan benar <span class="glyphicon glyphicon-pushpin"></span> 
                </div>-->
                <div class="col-md-10 col-md-offset-1">
                  <form method="post" action="<?php echo base_url()?>index.php/logincontrol/login_authentication">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input type="text" name="email" class="form-control" placeholder="email" required="required">
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                      <input type="password" name="password" class="form-control" placeholder="password" required="required">
                    </div>
                    <br>
                    <input  type="submit" name="login" class="btn btn-block btn-success" name="login" value="Login">
                    <a class="btn btn-block btn-primary" href="<?php echo base_url() ?>index.php/logincontrol/register_page">Sign Up</a>
                  </form>
               </div>
              </div>
            </div>
        </div>
      </center>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
