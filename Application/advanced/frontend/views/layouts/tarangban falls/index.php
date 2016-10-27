<!DOCTYPE html>
<html lang="en">


<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\IndexAsset;
use common\widgets\Alert;


?>
<head>
<title>Tarangban Falls</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/vegur_400.font.js"></script>
<script src="js/Vegur_bold_700.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/tms-0.4.x.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/FF-cash.js"></script>
<script>
$(document)
    .ready(function () {
    $('.form-1')
        .jqTransform();
    $('.slider')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 1000,
        preset: 'fade',
        pagination: true,
        pagNums: false,
        slideshow: 7000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <!--==============================header=================================-->
  <header>
    <div>
      <h1><a href="index.php"><img src="images/Logo test.png" alt="Logo"
      id = "front-logo"></a></h1>
      <div class="social-icons"> <span>Follow Us:</span> <a href="#" class="icon-3"></a> <a href="#" class="icon-2"></a> <a href="#" class="icon-1"></a> </div>
      <div id="slide">
        <div class="slider">
          <ul class="items">
            <li><img src="images/tarangbanfalls.png" alt=""></li>
            <li><img src="images/farmresort.png" alt=""></li>
            <li><img src="images/houses.png" alt=""></li>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
      <nav>
        <ul class="menu">
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="buying.php">About</a></li>
          <li><a href="selling.php">Services</a></li>
          <li><a href="#">Rates</a></li>
          <li><a href="#">Account</a></li>
          <li><a href="contacts.php">Contacts</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">Welcome to Calimbo Farm Resort!</h2>
        <p class="p2">Calimbo Farm resort in Calbayog City, Samar, Philippines. The location of the Tarangban Falls, is a good place for travelers and adventure-seekers to visit and relax. Enjoy yourself with the different services offered or just enjoy sitting beside the waterfalls.</p>
        <p class="line-1">Book a flight now and visit the the resort in Samar, Philippines. There are different services available for each and every one of you to try out such as trekking, hiking and many more. </p>
        

        <h2 class="p4">Travelers. Vacationers. Adventure-Seekers.</h2>
        <div class="wrap block-1">
          <div> <img src="images/page1-img1.jpg" alt="" class="img-border">
            <h3>Services</h3>
            <p>Check out the different services that are currently available for inquiry in the resort. Click here to find out more...</p>
            <a href="#" class="button">More</a> </div>
          <div> <img src="images/huts.png" alt="" class="img-border">
            <h3>Accomodation</h3>
            <p>Huge family? No problem. Check out the different rooms/houses you can avail for your stay here. Click here to find out more...</p>
            <a href="#" class="button">More</a> </div>
          <div class="last"> <img src="images/hut1.png" alt="" class="img-border">
            <h3>Rates</h3>
            <p>Want to know what is the rates of each room? We got you. Click here to find out more about the room rates...</p>
            <a href="#" class="button">More</a> </div>
        </div>
      </div>
     
     <!--<div class="grid_4">
        <div class="left-1">
          <h2 class="top-1 p3">Find your home</h2>
          <form id="form-1" class="form-1 bot-1" action="#">
            <div class="select-1">
              <label>Home type</label>
              <select name="select" >
                <option>Homes for sale</option>
              </select>
            </div>
            <div>
              <label>Location</label>
              <input type="text" value="Address, City, Zip" onBlur="if(this.value=='') this.value='Address, City, Zip'" onFocus="if(this.value =='Address, City, Zip' ) this.value=''">
            </div>
            <div class="select-2">
              <label>Beds</label>
              <select name="select" >
                <option>&nbsp;</option>
              </select>
            </div>
            <div class="select-2 last">
              <label>Baths</label>
              <select name="select" >
                <option>&nbsp;</option>
              </select>
            </div>
            <a class="button">Search</a>
            <div class="clear"></div>
          </form>
          <h2 class="p3">Find our office</h2>
          <img src="images/page1-img4.png" alt="">
          <div class="lists">
            <ul class="list-1">
              <li><a href="#">Asia</a></li>
              <li><a href="#">Australia</a></li>
              <li><a href="#">Africa</a></li>
            </ul>
            <ul class="list-1 last">
              <li><a href="#">North America</a></li>
              <li><a href="#">Europe</a></li>
              <li><a href="#">Latin America</a></li>
            </ul>
          </div>
        </div>
      </div>-->


      <div class="clear"></div>
    </div>
  </section>
</div>
<!--==============================footer=================================-->
<footer>
  <p>© 2016 Calimbo Farm Resort</p>
</footer>
<script>Cufon.now();</script>
</body>
</html>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
