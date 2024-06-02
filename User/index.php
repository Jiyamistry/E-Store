<?php
session_start();
include 'common/connection.php';
$pdt =$obj->query("select * from product");
$pdtt =$obj->query("select * from product order by id desc");
?>


<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:24 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home-ClothStore</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- favicon
		============================================ -->		
       <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="lib/nivo-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
        
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        
		<!-- modernizr JS
		============================================ -->		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Header Start-->
        <?php include 'common/header.php';?>
        <!--End of Header Area-->
        <!--Slider Area Start-->
        <div class="slider-area-home-four">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="preview-2">
                            <div id="nivoslider" class="slides">	
                                <a href="#"><img src="img/slider/slider-8.jpg" alt="" title="#slider-1-caption1"/></a>
                                <a href="#"><img src="img/slider/slider-9.jpg" alt="" title="#slider-1-caption1"/></a>
                            </div> 
                            <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                                <div class="timethai" style=" 
                                    position:absolute;
                                    bottom:0;
                                    left:0;
                                    background-color:rgba(224, 53, 80, 0.6);
                                    height:3px;
                                    -webkit-animation: myfirst 5000ms ease-in-out;
                                    -moz-animation: myfirst 5000ms ease-in-out;
                                    -ms-animation: myfirst 5000ms ease-in-out;
                                    animation: myfirst 5000ms ease-in-out;
                                    ">
                                </div>
                                <div class="banner-content slider-1 hidden-xs">
                                    <div class="text-content">
                                        <h1 class="title1"><span>collections</span></h1>										
                                        <h2 class="title2" ><span>2022 new design</span></h2>																	<div class="banner-readmore">
                                            	
                                        </div>
                                    </div>
                                </div>
                            </div>		   
                        </div>
                    </div>   
                    <div class="col-lg-6 col-md-6">
                        <div class="banner-area-home-four">  
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-container">
                                        <a href="shop-grid.php">
                                            <img src="img/banner/9.jpg" alt="">
                                        </a>    
                                        <div class="banner-text">
                                            <h3>Cloth Items</h3>
                                            <p>All Cloth Items Avaiable Here........</p>
                                            <a href="shop-grid.php">View all products</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-container">
                                        <a href="shop-grid.php">
                                            <img src="img/banner/10.jpg" alt="">
                                        </a>    
                                        <div class="banner-text">
                                           <h3>Cloth Items</h3>
                                            <p>All Cloth Items Avaiable Here........</p>
                                            <a href="shop-grid.php">View all products</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-container">
                                        <a href="shop-grid.php">
                                            <img src="img/banner/11.jpg" alt="">
                                        </a>    
                                        <div class="banner-text">
                                           <h3>Cloth Items</h3>
                                            <p>All Cloth Items Avaiable Here........</p>
                                            <a href="shop-grid.php">View all products</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-container">
                                        <a href="shop-grid.php">
                                            <img src="img/banner/12.jpg" alt="">
                                        </a>    
                                        <div class="banner-text">
                                            <h3>Cloth Items</h3>
                                            <p>All Cloth Items Avaiable Here........</p>
                                            <a href="shop-grid.php">View all products</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>     
                    </div> 
                </div>        
            </div>            
        </div>
        <!--End of Slider Area-->
        <!--Featured Product Carousel Area Start-->
        <div class="featured-product-carousel-area">
            <div class="container">
                <div class="section-padding"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title"><h2>FEATURED PRODUCTS</h2></div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="product-carousel">
                             <?php
                                 while ($r=$pdtt->fetch_object())
                                  {
                                  ?>
                            <div class="col-lg-12">
                                <!--item 1 start-->
                                <div class="single-product-item">
                                    <div class="new-product-label"><span>new</span></div>
                                    <div class="single-product clearfix">
                                        <a href="product-details.php?delid=<?php echo "$r->id"?>">
                                            <span class="product-image">
                                               <img src="../Admin/img/Product/<?php echo "$r->img" ?>" >
                                            </span>
                                           
                                        </a>
                                        <div class="button-actions clearfix">   
                                                  <a href="cart.php">  <button class="button add-to-cart" type="button">
                                                        <span><i class="fa fa-shopping-cart"></i></span>
                                                    </button></a>
                                                    <ul class="add-to-links">
                                                                                                                            
                                                    </ul>
                                                </div>
                                    </div>
                                    <h2 class="single-product-name"><a href="#"><?php echo $r->pname ;?> </a></h2>
                                    <div class="price-box">
                                        <p class="special-price">
                                            <span class="price">₹<?php echo $r->price;?></span>
                                        </p>                                             
                                    </div>
                                </div><!--end of item 1-->
                            </div><!--end of col-md-3-->
                             <?php   # code...
                                 }

                                ?>
                            
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <!--End of Featured Product Carousel Area-->
        <!--Banner Area Start-->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="banner-box mb-xs-30">
                            <a href="shop-grid.php">
                                <img src="img/banner/6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-box">
                            <a href="shop-grid.php">
                                <img src="img/banner/7.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Area-->
        <!--Product Category Area Start-->
        <div class="product-category-area section-padding">
            <div class="container">
               <div class="row">
                        <div class="product-carousel">
                             <?php
                                 while ($rs=$pdt->fetch_object())
                                  {
                                  ?>
                            <div class="col-lg-12">
                                <!--item 1 start-->
                                <div class="single-product-item">
                                    <div class="new-product-label"><span>new</span></div>
                                    <div class="single-product clearfix">
                                        <a href="product-details.php?delid=<?php echo "$rs->id"?>">
                                            <span class="product-image">
                                               <img src="../Admin/img/Product/<?php echo "$rs->img" ?>" >
                                            </span>
                                           
                                        </a>
                                        <div class="button-actions clearfix">   
                                                  <a href="cart.php">  <button class="button add-to-cart" type="button">
                                                        <span><i class="fa fa-shopping-cart"></i></span>
                                                    </button></a>
                                                    <ul class="add-to-links">
                                                                                                                            
                                                    </ul>
                                                </div>
                                    </div>
                                    <h2 class="single-product-name"><a href="#"><?php echo $rs->pname ;?> </a></h2>
                                    <div class="price-box">
                                        <p class="special-price">
                                            <span class="price">₹<?php echo $rs->price;?></span>
                                        </p>                                             
                                    </div>
                                </div><!--end of item 1-->
                            </div><!--end of col-md-3-->
                             <?php   # code...
                                 }

                                ?>
                            
                        </div>
                    </div>
            </div>
        </div>
        <!--End of Product Category Area-->
        <!--Blog Area Start-->
       
        <!--End of Blog Area-->
        <!--Brand Area Strat-->
        <?php include 'common/footer.php';?>
        <!--End of Footer Area-->
        <!--Quickview Product Start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="img/product/quick-view.jpg">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h1>Diam quis cursus</h1>
                                    <div class="price-box">
                                        <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                                    </div>
                                    <a href="product-details.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Quickview Product-->	
        <!--Newsletter Popup Start-->
     
        <!--End of Newsletter Popup-->
        
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        
		<!-- popper JS
		============================================ -->		
        <script src="js/popper.min.js"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
        
        <!-- nivo slider js
		============================================ -->       
		<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/nivo-slider/home.js" type="text/javascript"></script>
		
		<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
        	
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
        
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
        
		<!-- price-slider JS
		============================================ -->		
        <script src="js/jquery-price-slider.js"></script>	
        
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
        
        <!--Countdown js-->
        <script src="js/jquery.countdown.min.js"></script>
        
		<!-- Sticky Menu JS
		============================================ -->		
        <script src="js/jquery.sticky.js"></script>
        
		<!-- Elevatezoom JS
		============================================ -->		
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:34 GMT -->
</html>