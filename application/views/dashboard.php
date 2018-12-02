<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Halaman Employee</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url() ?>dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url() ?>css/dashboard.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="<?php echo base_url()?>assets/js/ie-emulation-modtes-warning.js"></script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="<?php echo base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
       <div class="navbar-header">
          <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="navbar-brand"><span class="glyphicon glyphicon-home"> Vaporwave</span></a>

        </div>
        <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
          <li><a class="navbar-brand" href="logout"><span class="glyphicon glyphicon-share"> logout</span></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid">
   <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
     <ul class="nav nav-sidebar">
      <li><a>Dashboard</a></li>
      <li><a>Edit Profile</a></li>
      <li><a href="<?php echo base_url() ?>index.php/logincontrol/logout">Logout</a></li>
    </ul>
  </div>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="page-one" >
    <form method="post">
                    <!-- <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="number" name="id" class="form-control" placeholder="Id">
                    </div>
                    <br> -->
                    <div class="input-group">
                    <textarea type="text-area" name="nama" class="form-control" placeholder="Caption" required="required" style="min-width: 627px"></textarea>
                    </div>
                    <br>
                    <?php echo form_open_multipart('logincontrol/do_upload');?>
                    <input type="file" name="userfile" size="20" />
                    <br /><br />
                    <input name="daftar" type="submit" class="btn btn-block btn-primary" value="upload">
                  </form>
                </div>
              </div>
            </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/docs.min.js"></script>
  </body>
  </html>

