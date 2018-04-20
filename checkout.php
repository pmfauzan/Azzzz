<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "connect.php";
$link=connect_db();
$i=1;

$_SESSION['jkt']=$_GET['jkt'];
    
    $sql="select * from barang where id_barang like '%".$_SESSION['jkt']."%'";
    $res=mysqli_query($link,$sql);
    $data=mysqli_fetch_array($res);

    $sqla="select * from pemesan order by id_pemesan desc";
    $resa=mysqli_query($link,$sqla);
    $dataa=mysqli_fetch_array($resa);

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

            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
        <!-- //FlexSlider-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.php">Adrenalin</a>
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
				<h3>Formulir Pembayaran</h3>
				
				 <form action="prosesbayar.php?jkt=<?php echo "$data[id_barang]"; ?>" method="post">
                    <ul>
                         <li class="text-info">ID Pesanan : </li>
                        <li><input style="border-color: #0f0" type="text" name="idp" id="idp" value="<?php echo"$dataa[id_pemesan]"; ?>" disabled></li>
                        
                    </ul>
					<ul>
                         <li class="text-info">ID Barang : </li>
                        <li><input style="border-color: #0f0" type="text" name="idb" value="<?php echo"$data[id_barang]"; ?>" disabled></li>
                        
                    </ul>
                    <ul>
                         <li class="text-info">Harga : </li>
                        <li><input style="border-color: #0f0" type="text" name="hrg" id="hrg" value="<?php echo "$data[harga]"; ?>" disabled></li>
                        
                    </ul>
                    <script>
                        function multi()
{
 
  var drop1=document.getElementById("hrg").value;
  var drop11=parseInt(drop1);
  var drop2=document.getElementById("jml").value;
  var disc = drop11*drop2;
  document.getElementById("total").value = disc.toFixed(0);
}
                    </script>
                    <ul>
                         <li class="text-info">Jumlah : </li>
                        <li><select name="jml" id="jml" style="width: 50%;" onchange="multi();" class="form-control qnty-chrt">
                                <?php
                                for ($i; $i <= $data[Stok]; $i++) { 
                                    ?><option id="id<?php echo "$i";?>" value="<?php echo "$i";?>"><?php echo "$i";?></option><?php
                                }

                                ?>

                                </select></li>
                      
                    </ul>
                    
                   
                    <br><br><br>
                    <ul>
                        <li class="text-info">Total Harga : </li>
                        <li><input style="border-color: #0f0" type="text" name="total" id="total" value="<?php echo "$data[harga]"; ?>" disabled></li>
                    </ul>

                    <ul>
                         <li class="text-info">Tipe Pembayaran : </li>
                        <li><select name="tipe" id="tipe"  style="width: 50%;" class="form-control qnty-chrt">
                               <option value="trf">Transfer</option>
                               <option value="krd">Kredit</option>
                                </select></li>
                      
                    </ul>
                    <ul>
                         <li class="text-info">Bank : </li>
                        <li><select name="bank" id="bank" style="width: 50%;" class="form-control qnty-chrt">
                                <option value="bni">BNI</option><option value="bca">BCA</option>

                                </select></li>
                      
                    </ul>
                    
                    <input type="submit" value="Pesan" onclick="add()">
                    
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