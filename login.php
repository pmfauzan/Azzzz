<?php
session_start();
include "connect.php";

// Notif Error
$Err = "";
if(isset ($_GET ["Err"]) && !empty ($_GET ["Err"])){
	switch ($_GET ["Err"]){
		case 1:
			$Err = "Username dan Password Kosong";
		break;
		case 2:
			$Err = "Username Kosong";
		break;
		case 3:
			$Err = "Password Kosong";
		break;
		case 4:
			$Err = "Password salah";
		break;
		case 5:
			$Err = "Username atau Password salah";
		break;
		case 6:
			$Err = "Maaf, Terjadi Kesalahan";
		break;
	}
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <title>Adrenalin Jaket</title>
    <link rel="shortcut icon" type="image/icon" href="./icon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Adrenalin Jaket" />
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta charset utf="8">
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
    
    <!--fonts-->
    <!--bootstrap-->
       <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
      <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <!--shop-kart-js-->
        <script src="js/simpleCart.min.js"></script>
    <!--default-js-->
      <script src="js/jquery-2.1.4.min.js"></script>
    <!--bootstrap-js-->
      <script src="js/bootstrap.min.js"></script>
    <!--script-->
    </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="logo">
        <b>Login Pengelola Adrenalin</b>
        <img class="img" src="./images/pos4.jpg" position="center" width="140" height="170">
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <b><p class="login-box-msg">Login</p></b>
        <form action="checklog.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="Username" class="form-control" placeholder="Username" maxlength="30" />
            <span class="form-control-feedback"><i class="fa fa-user"></i></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" id="form-password" name="Password" class="form-control" placeholder="Password" maxlength="255" />
            <span class="form-control-feedback"><i class="fa fa-unlock"></i></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary">Sign In <i class="fa fa-sign-in"></i></button>
            </div><!-- /.col -->
          </div>
		  <br>
			<center><font style="color:red;"><?php echo $Err ?></font></center>
			<center><font style="color:green;"><?php echo $Notif ?></font></center>
		</br>
        </form>
		
        
		
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="aset/plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){   
        $('#form-checkbox').click(function(){
          if($(this).is(':checked')){
            $('#form-password').attr('type','text');
          }else{
            $('#form-password').attr('type','password');
          }
        });
      });
    </script>
  </body>
</html>