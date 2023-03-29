<!DOCTYPE html>
<html>
<head>
  <title>Login | Bengkel & Suku Cadang</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  </nav>

</head>

<body>
 <?php
    include 'controllers.php';
    if($session->check() == true){
      header("location: fd/fdhome.php");
    }

    echo $session->check();

  ?>

  <body background="assets/img/login.png">
  <div class="container" style=" color:black; padding: 15% 0% 3.5% 0%;">
    <div class="row" >
      <div class="col-md-offset-2 col-md-8" >
        <div class="col-md-offset-1 col-md-10" style="color: black;background:#0000006b; padding: 5% 5% 5% 5%;;border-radius: 20px">
          <center><h2 class="label-top" style="padding-bottom: 10px;border-bottom: 5px solid #f1f1f1; ">Log In</h2></center>
          <form role="form" method="POST" name="login" action="proseslogin.php" >
          <br><br>
        <form class="form-horizontal" role="form">
            <div class="form-group">
              <input type="text" class="form-control fc" id="username" placeholder="Nama Pengguna" name="username" style="text-align:center;height: 40px;font-size: 17px;letter-spacing: 3px;">
            </div>
            <div class="form-group">
              <input type="password" class="form-control fc" id="password" placeholder="Kata Sandi" name="password" style="text-align: center;height: 40px;font-size: 17px;letter-spacing: 3px;">
            </div>
            <div class="form-group">
              <br><input type="submit" class="btn btn-default fc col-xs-offset-0 col-xs-12"  name="submit" value="Masuk" style="background: rgba(255, 255, 255, 0.49);color: black;font-size: 18px;letter-spacing: 2px;padding: 8px;">
            </div>
            </form>
          </form>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</div>
                <div class="container" style="color: white; padding: 14px;font-size: 15px">
                    <center> </center>
                </div>
            </nav>
</body>
</html>