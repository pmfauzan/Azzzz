<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "connect.php";
$link=connect_db();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Adrenalin Jaket</title>
    <link rel="shortcut icon" type="image/icon" href="./icon.ico">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Adrenalin Jaket" />
        
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
         <!-- FlexSlider -->
            <script src="js/imagezoom.js"></script>
              <script defer src="js/jquery.flexslider.js"></script>
            <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

           <?php
    $_SESSION['jkt']=$_GET['jkt'];
    
    $sql="select * from barang where id_barang like '%".$_SESSION['jkt']."%'";
    $res=mysqli_query($link,$sql);
    $data=mysqli_fetch_array($res);
    ?>
        <!-- //FlexSlider-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.php">Adrenalin</a>
                    </div>
                    <div class="login-bars">
                        
                        
                    </div>
        <div class="clearfix"></div>
                </div>
                

                        
                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->   
                        <div class="clearfix"></div>
                    </div>
                    <!--/.content--->
                </div>
                    <!--header-bottom-->
            </div>
        </div>
            </div>
        </div>
        
        <!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>Formulir Pemesanan</h3>
				
				 <form action="prosespesan.php?jkt=<?php echo "$data[id_barang]";?>" method="post">
                    <ul>
                        <li class="text-info">Nama : </li>
                        <li><input style="border-color: #0f0" type="text" name="nama" value=""></li>
                    </ul>
                    <ul>
                        <li class="text-info">Email : </li>
                        <li><input style="border-color: #0f0" type="text" name="email" value=""></li>
                     </ul>               
                    <ul>
                        <li class="text-info">Alamat : </li>
                        <li><input style="border-color: #0f0" type="text" name="alamat" value=""></li>
                    </ul>
                    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
                    <ul>
                        <li class="text-info">Provinsi : </li>
                        <li><script type="text/javascript" src="js/ajax_kota.js"></script>
                <select name="prop" value="<?php isset($_POST['prop']); ?>" id="prop" onchange="ajaxkota(this.value)">
                    <option>Pilih Provinsi</option>
                    <?php 
                    $sql="SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama";
                    $queryProvinsi=mysqli_query($link,$sql);
                    while ($dataProvinsi=mysqli_fetch_array($queryProvinsi)){
                        echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
                    }
                    ?>
                <select></li>
                    </ul>
                    <ul>
                        <li class="text-info">Kabupaten/Kota :</li>
                        <li><select name="kota" value="<?php isset($_POST['kota']); ?>" id="kota" onchange="ajaxkec(this.value)">
                    <option>Pilih Kota</option>
                </select></li>
                    </ul>
                    <ul>
                        <li class="text-info">Kecamatan :</li>
                        <li><select value="<?php isset($_POST['kec']); ?>" name="kec" id="kec" onchange="ajaxkel(this.value)">
                    <option>Pilih Kecamatan</option>
                </select></li>
                    </ul>
                     <ul>
                        <li class="text-info">Kode Pos : </li>
                        <li><input style="border-color: #0f0" type="text" name="kdpos" value=""></li>
                    </ul>
                     <ul>
                        <li class="text-info">Telepon : </li>
                        <li><input style="border-color: #0f0" type="text" name="tlp" value=""></li>
                    </ul>
                                          
                    <input type="submit" value="Pesan">&emsp;<a href="index.php"><input style="width: 90px; height: 36px;" class="btn-danger" type="button" value="Batal" /></a>
                    
                </form>
			</div>
		</div>
	</div>
        <div class="footer-grid">
            <div class="container">
               
                <div class="col-md-2 re-ft-grd">
                    <h3>Short links</h3>
                    <ul class="shot-links">
                        <li><a href="contact.php">Contact us</a></li>
                        </ul>
                </div>
                <div class="col-md-6 re-ft-grd">
                    <h3>Social</h3>
                    <ul class="social">
                        <li><a href="http://www.facebook.com" class="fb">facebook</a></li>
                        <li><a href="http://www.twitter.com" class="twt">twitter</a></li>
                        <li><a href="https://plus.google.com" class="gpls">g+ plus</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <div class="bt-logo">
                        <div class="logo">
                            <a href="index.php" class="ft-log">Adrenalin</a>
                        </div>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
            <div class="copy-rt">
                <div class="container">
            <p>&copy;   2018 Adrenalin</p>
                </div>
            </div>
        </div>
    </body>
</html>