<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SoundCloud</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	 <header id="header"><!--header-->
          <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +6281-217-537-525</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> d_cloud.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <img src="<?php echo base_url();?>assets/images/home/logo1.png" alt="" style="width: 200px" /></a>
                        </div>
                    </div>
                   <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo site_url('C_Login/logout');?>"><i class="fa fa-user"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    </header>
	<section>
		<div class="container">
			<div class="row">
				<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">DATA ADMIN</h2>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url();?>assets/images/data/1.jpg" style="width: 100px" alt="" />
													<a href="<?php echo site_url('C_Admin/filtermember');?>" class="btn btn-default add-to-cart"></i>Filter Member</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="<?php echo base_url();?>assets/images/data/2.jpg" style="width: 100px" alt="" />
													<a href="<?php echo site_url('C_Admin/postiklan');?>" class="btn btn-default add-to-cart"></i>Posting Iklan</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url();?>assets/images/data/3.jpg" style="width: 100px" alt="" />
													<a href="<?php echo site_url('C_Admin/filterevent');?>" class="btn btn-default add-to-cart"></i>Filter Event</a>
												</div>
												
											</div>
										</div>
									</div>

                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="<?php echo base_url();?>assets/images/data/4.png" style="width: 100px" alt="" />
                                                    <a href="<?php echo site_url('C_Admin/deleteevent');?>" class="btn btn-default add-to-cart"></i>Delete Event</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
								</div>
						</div>
					</div><!--/recommended_items-->
			</div>
		</div>
	</section>
	
	  <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="companyinfo">
                            <h2><span>D</span>-Cloud</h2>
                            <p>Group Of Progaming Web</p>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="col-sm-2">
                            <div class="video-gallery text-center">
                                <p>Siti Febrianti R</p>
                                <h2>135150200111051</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-2">
                            <div class="video-gallery text-center">
                                <p>Desy Ulina Purba</p>
                                <h2>135150201111218</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-2">
                            <div class="video-gallery text-center">
                                <p>Hafizh Rahman M</p>
                                <h2>145150207111032</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-2">
                             <div class="video-gallery text-center">
                                <p>Entin Endah Cahyati</p>
                                <h2>155150200111078</h2>
                            </div>
                        </div>

                        <div class="col-sm-2">
                             <div class="video-gallery text-center">
                                <p>Nurul Faizah</p>
                                <h2>155150201111099</h2>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-right">Copyright © 2017 PEMWEB_5 Inc. All rights reserved.</p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->

    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/price-range.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>