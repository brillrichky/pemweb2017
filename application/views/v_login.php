<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | CraftTech.com</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">  
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
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


    </header><!--/header-->


   <section id="form" style="margin-top: 50px;"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="login-form"><!--login form-->
                        <h2>Login</h2>
                        <form action="<?php echo site_url('C_Login/login'); ?>" class="form-horizontal" method="post">
                            <input type="text" placeholder="Username" name="username" required="required"/>
                            <input type="password" placeholder="Password" name="password" required="required"/>
                            <button type="submit" class="btn btn-default" style="float: right;">Login</button>
                        </form>
                        <h6>Anda belum punya account? daftar <a href="<?php echo site_url('main_user/signup');?>">disini</a></h6>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
	
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
  
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/price-range.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>