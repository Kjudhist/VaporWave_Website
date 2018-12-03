<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>VaporWave</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>css/styleLogReg.css" rel="stylesheet">

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
    <div id="pageContainer">
      <div id="formContainer">
        <div id="logo"></div>
        <div id="forms">
          <form id="whyReg">
            <div class="fadeUp">
              <div class="formHead">
                <h1>KENAPA DAFTAR?</h1>
                <p>apa aja sih keuntungannya ?</p>
              </div>
              <div class="formDiv">
                <ul>
                  <li>Mendapatkan platform untuk berkarya.</li>
                  <li>Bisa melihat karya orang lain atau sumbit milikmu sendiri.</li>
                </ul>
              </div>
              <div class="formOther"><a class="regBtn" href="#">Close</a></div>
            </div>
          </form>
          <form id="login" action="<?php echo base_url()?>index.php/logincontrol/login_authentication" method="post">
            <div class="formHead">
              <h1>SELAMAT DATANG</h1>
              <p>Silahkan masukan username dan password anda</p>
            </div>
            <div class="formDiv">
              <input type="text" placeholder="Username" name="username" required/>
            </div>
            <div class="formDiv">
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <div class="formDiv">
              <input type="submit" value="LOGIN"/>
            </div>
            <div class="formOther"><a class="needAccount" href="#">BELUM PUNYA AKUN ?</a></div>
          </form>
          <form id="register" action="<?php echo base_url() ?>index.php/logincontrol/register_page" method="post">
            <div class="formHead">
              <h1>REGISTER</h1>
              <p>Silahkan isi data dibawah ini</p>
            </div>
            <div class="formDiv">
              <input type="text" placeholder="Username" name="username" required/>
            </div>
            <div class="formDiv">
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div class="formDiv">
              <input type="password" placeholder="Password" name="pass" required/>
            </div>
            <div class="formDiv">
              <input type="submit" value="REGISTER" name="register"/>
            </div>
            <div class="formOther"><a class="backLogin" href="#">KEMBALI</a><a class="regBtn" href="#">KENAPA HARUS DAFTAR?</a></div>
          </form>
          <script src="<?php echo base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>
          <script src="<?php echo base_url()?>js/jquery-3.2.1.min.js"></script>
          <script src="<?php echo base_url()?>js/jquery.min.js"></script>
          <script src="<?php echo base_url()?>js/scriptLogReg.js"></script>
        </div>
      </div>
    </div>