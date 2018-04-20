<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
    include "connect.php";
    $link=connect_db();
    $i=1;
            
?>
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
    <?php
    $_SESSION['jkt']=$_GET['jkt'];
    
    $sql="select * from barang where id_barang like '%".$_SESSION['jkt']."%'";
    $res=mysqli_query($link,$sql);
    $data=mysqli_fetch_array($res);
    ?>
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
        
        <div class="showcase-grid">
            <div class="container">
                <div class="col-md-8 showcase">
                    <div class="flexslider">
                          <ul class="slides">
                            <li data-thumb="images/<?php echo "$data[foto]";?>">
                                <div class="thumb-image"> <img src="images/<?php echo "$data[foto]";?>" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            
                          </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 showcase">
                    <div class="showcase-rt-top">
                        <div class="pull-left shoe-name">
                            <h3><?php echo "$data[nama_barang]";?></h3>
                            <p>Jaket Berkualitas</p>
                            <h4>Rp <?php echo "$data[harga]";?></h4>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                    <hr class="featurette-divider">
                    <div class="shocase-rt-bot">
                        <div class="float-qty-chart">
                        <ul>
                            
                            <li class="qty">
                                <h4>Stok Tersedia</h4>
                                
                                <h4><?php
                                echo "$data[Stok]";
                                ?>
                                </h4>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        </div>
                        </div>
                        <ul>
                            <li class="ad-2-crt simpleCart_shelfItem">
                                <a class="btn" href="register.php?jkt=<?php echo "$data[id_barang]";?>" role="button">Beli</a>
                                <a class="btn item_add" href="index.php" role="button">Kembali</a>
                            </li>
                        </ul>
                    </div>
                    <div class="showcase-last">
                        <h3>Detail Produk</h3>
                        <ul>
                            <li>Bahan terbuat dari Cordura</li>
        <li>Sehingga nyaman untuk dipakai untuk kegiatan sehari-hari</li>
                            <li>Bahan Cordura membuat tidak pengap dan panas</li>
        <li>Bahan ini juga waterproof sehingga bisa tahan ketika terkena cipratan air</li>
                            
                        </ul>
                    </div>
                </div>
        <div class="clearfix"></div>
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
    