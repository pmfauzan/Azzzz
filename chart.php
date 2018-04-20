<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
                    <div class="login-bars">
                        
                        <div class="cart box_1">
                            <a href="chart.php">
                            <h3>
                                <p>Total Keranjang</p>
                                <div class="total">
(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div></h3>
                            </a>
                            
                            <div class="clearfix"> </div>
                        </div>  
                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->
                <div class="header-botom">
                    <div class="content white">
                    <nav class="navbar navbar-default nav-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--/.navbar-header-->

                        
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
       
        <!-- check-out -->
            <div class="check">
                <div class="container">	 
                    <div class="col-md-3 cart-total">
                        <a class="continue" href="index.php">Lanjutkan Belanja</a>
                        <div class="price-details">
                            <h3>Total Harga</h3>
                            <span>Total</span>
                            <span class="total1">375.000</span>
                            <span>Biaya Kirim</span>
                            <span class="total1">12.000</span>
                            <div class="clearfix"></div>				 
                        </div>
                        <hr class="featurette-divider">
                        <ul class="total_price">
                           <li class="last_price"> <h4>TOTAL</h4></li>	
                           <li class="last_price"><span>387.000</span></li>
                           <div class="clearfix"> </div>
                        </ul> 
                        <div class="clearfix"></div>
                        <a class="order" href="register.php">Alamat Tujuan</a>
                    </div>
                    <div class="col-md-9 cart-items">
                        <h1>Keranjang Anda (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</h1>
                            <script>$(document).ready(function(c) {
                                $('.close1').on('click', function(c){
                                    $('.cart-header').fadeOut('slow', function(c){
                                        $('.cart-header').remove();
                                    });
                                    });	  
                                });
                           </script>
                        <div class="cart-header">
                <div class="close1"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>
                            <div class="cart-sec simpleCart_shelfItem">
                                    <div class="cart-item cyc">
                                        <img src="images/pos5.jpg" class="img-responsive" alt=""/>
                                    </div>
                                   <div class="cart-item-info">
                                        <ul class="qty">
                                            <li><p>Jumlah : 1</p></li>
                                            <li><p>Harga Per-item : Rp 375000</p></li>
                                        </ul>
                                        <div class="delivery">
                                            
                                            <span>Perkiraan Sampai  2-3 Hari Kerja</span>
                                            <div class="clearfix"></div>
                                        </div>  
                                   </div>
                                   <div class="clearfix"></div>

                              </div>
                         </div>
                         <script>$(document).ready(function(c) {
                                $('.close2').on('click', function(c){
                                        $('.cart-header2').fadeOut('slow', function(c){
                                    $('.cart-header2').remove();
                                });
                                });	  
                                });
                         </script>
                       			
                    </div>
                    <div class="clearfix"> </div>
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