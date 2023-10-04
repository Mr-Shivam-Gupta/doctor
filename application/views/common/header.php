
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>KidsAcademy</title>
  <link href="images/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

  <!-- Bootstrap -->
  <link href="<?php echo base_url('include/');?>assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font-awesome -->
  <link href="<?php echo base_url('include/');?>assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- Flaticon -->
  <link href="<?php echo base_url('include/');?>assets/flaticon/flaticon.css" rel="stylesheet">

  <!-- lightcase -->
  <link href="<?php echo base_url('include/');?>assets/css/lightcase.css" rel="stylesheet">

  <!-- Swiper -->
  <link href="<?php echo base_url('include/');?>assets/css/swiper.min.css" rel="stylesheet">

  <!-- quick-view -->
  <link href="<?php echo base_url('include/');?>assets/css/quick-view.css" rel="stylesheet">

  <!-- nstSlider -->
  <link href="<?php echo base_url('include/');?>assets/css/jquery.nstSlider.css" rel="stylesheet">

  <!-- flexslider -->
  <link href="<?php echo base_url('include/');?>assets/css/flexslider.css" rel="stylesheet">

  <!-- Style -->
  <link href="<?php echo base_url('include/');?>assets/css/rtl.css" rel="stylesheet">

  <!-- Style -->
  <link href="<?php echo base_url('include/');?>assets/css/style.css" rel="stylesheet">

  <!-- Responsive -->
  <link href="<?php echo base_url('include/');?>assets/css/responsive.css" rel="stylesheet">


</head>

<body id="scroll-top">


  <!-- mobile menu start here -->
  <div class="mobile-menu-area">
    <div class="logo-area">
      <a class="logo" href="<?php echo base_url('');?>"><img src="<?php echo base_url('include/');?>images/logo.png" alt="logo" class="img-responsive"></a>
      <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="mobile-menu">
      <ul class="m-menu">
        <li class="">
          <a href="#">Home</a>
        </li>
        <li class=""><a href="#">About</a></li>

          <li class="dropdown-submenu">
          <a href="#">Treatment</a>
          <ul class="mobile-submenu">
            <li><a href="<?php echo base_url('');?>">treatment 1</a></li>
            <li><a href="<?php echo base_url('');?>">treatment 2</a></li>
            <li><a href="<?php echo base_url('');?>">treatment 3</a></li>
          </ul>
        </li>
          <li class="dropdown-submenu">
          <a href="#">Gallery</a>
          <ul class="mobile-submenu">
            <li><a href="<?php echo base_url('');?>">Images</a></li>
            <li><a href="<?php echo base_url('');?>">Videos</a></li>
            <li><a href="<?php echo base_url('');?>">Social Media 3</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('contact-us');?>">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <!-- mobile menu ending here -->



  <!-- header start here -->
  <header>
    <div class="header-top">
      <div class="container">
        <div class="ht-area">
          <ul class="left">
            <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Phone : 8801 234 567 890</li>
            <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Opening Time : 9:30am-5:30pm</li>
            <li><span><i class="fa fa-home" aria-hidden="true"></i></span> Address : Labartisan 1205 Newyork</li>
          </ul>
          <ul class="right">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>  
    </div>
    <div class="main-menu">
      <div class="container">
        <div class="row no-gutters">
          <nav class="main-menu-area w-100">
            <div class="logo-area">
              <a class="" href="<?php echo base_url('');?>"><img src="<?php echo base_url('include/');?>images/logo.png" alt="logo" class="img-responsive"></a>
              <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="menu-area">
              <ul class="menu">
                <li class="">
                  <a href="<?php echo base_url('');?>" class="" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Home </a>
                </li>
                <li class="">
                  <a href="<?php echo base_url('');?>" class="" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">About </a>
                </li>
                <li class="dropdown">   
                  <a href="<?php echo base_url('');?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Treatment <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('');?>">Treatment 1</a></li>
                    <li><a href="<?php echo base_url('');?>">Treatment 2</a></li>
                    <li><a href="<?php echo base_url('');?>">Treatment 3</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Gallery <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('');?>">Images</a></li>
                    <li><a href="<?php echo base_url('');?>">Videos</a></li>
                    <li><a href="<?php echo base_url('');?>">Social Media</a></li>
                  </ul>
                </li>
                <li class="">
                  <a href="<?php echo base_url('contact-us');?>" class="" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- header End here -->
