<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | CraftTech.com</title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
	<style>
	</style>
</head>
<body>
	<header id="header">
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo site_url('main_user/index');?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo site_url('C_Login/masuk');?>"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="header-bottom" style="padding-bottom: 10px;padding-top: 10px;">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo site_url('main_user/index');?>" class="active">Home</a></li>
								<li><a href="<?php echo site_url('main_user/news');?>">News</a></li>
								<li class="dropdown"><a href="#">Article<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo site_url('main_user/console');?>">Console Game</a></li>
										<li><a href="<?php echo site_url('main_user/hp');?>">Handphone</a></li>
										<li><a href="<?php echo site_url('main_user/pc');?>">Laptop dan PC</a></li>  
                                    </ul>
                                </li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<br><br>
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Craft</span>Tech<span>.com</span></h1>
									<h2>Portal Informasi Teknologi Masa Kini</h2>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url();?>assets/images/home/laptop.png" class="girl img-responsive" alt="" height="400" width="400" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Craft</span>Tech<span>.com</span></h1>
									<h2>Review, article, and Latest News</h2>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url();?>assets/images/home/laptop2.png" class="girl img-responsive" alt="" height="500" width="500" />
								</div>
							</div>					
						</div>
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="recommended_items" style="background-color: #eeeeee"><!--recommended_items-->
					<h3>&nbsp;&nbsp;<span class="glyphicon glyphicon-th-large"></span> Article</h3>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								<?php foreach($event as $b){ ?>	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a  data-toggle="modal" data-target="#blogdetail"><img src="<?php echo base_url();?><?php echo $b['foto'];?>" class="img-responsive" alt="music theme"  /></a>
													<p><?php echo $b['namaevent'];?></p>
													<a href="<?php echo site_url('main_user/lihatdetail/'.$b['id_event']);?>" class="btn btn-default add-to-cart">Lihat Detail</a>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
		</div>
	</section>
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/price-range.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
<footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="companyinfo">
                            <h2><span>Kelompok</span>-3</h2>
                            <p>Pemweb - D</p>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="col-sm-2">
                            <div class="video-gallery text-center">
                                <p>Brilliant Richky Setya Putra</p>
                                <h2>155150201111232</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-2">
                            <div class="video-gallery text-center">
                                <p>Darin Nadhifah</p>
                                <h2>155150207111063</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-2">
                            <div class="video-gallery text-center">
                                <p>Ari Setiawan</p>
                                <h2>155150200111083</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-2">
                             <div class="video-gallery text-center">
                                <p>Fadhel Muhammad</p>
                                <h2>155150201111348</h2>
                            </div>
                        </div>

                        <div class="col-sm-2">
                             <div class="video-gallery text-center">
                                <p>Mohammad Rizky Dwisaputra</p>
                                <h2>155150201111073</h2>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row" style="text-align: center;">
                    <p class="pull-left">Copyright © 2017 CraftTech.com. All rights reserved.</p>
                </div>
            </div>
        </div>  
    </footer>  
</html>