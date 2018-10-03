<link rel="stylesheet" href="css/styleLogReg.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/scriptLogReg.js"></script>
<div id="pageContainer">
  <div id="formContainer">
    <div id="logo"><img src="media/Logo.png"/></div>
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
      <form id="login" action="loginCheck.php" method="post">
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
      <form id="register" action="regist.php" method="post">
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
          <input type="password" placeholder="Password" name="password" required/>
        </div>
        <div class="formDiv">
          <input type="submit" value="REGISTER" name="register"/>
        </div>
        <div class="formOther"><a class="backLogin" href="#">KEMBALI</a><a class="regBtn" href="#">KENAPA HARUS DAFTAR?</a></div>
      </form>
    </div>
  </div>
</div>