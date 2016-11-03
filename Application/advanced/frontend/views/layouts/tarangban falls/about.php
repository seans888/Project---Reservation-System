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
<head>
<title>Tarangban Falls</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider-2.css">
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
      <h1><a href="index.php"><img src="images/Logo test.png" alt=""></a></h1>
      <div class="social-icons"> <span>Follow Us:</span> <a href="#" class="icon-3"></a> <a href="#" class="icon-2"></a> <a href="#" class="icon-1"></a> </div>
      <div id="slide">
        <div class="slider">
          <ul class="items">
            <li><img src="images/tarangbanfalls-small.png" alt=""></li>
            <li><img src="images/farmresort-small.png" alt=""></li>
            <li><img src="images/houses-small.png" alt=""></li>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
       <nav>
        <ul class="menu">
          <li><a href="index.php">Home</a></li>
          <li class="current"><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="rates.php">Rates</a></li>
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
        <h2 class="top-1 p3">About Calimbo Farm Resort</h2>
        <p>Calimbo Farm Resort is a resort in Calbayog City, Samar, Philippines. The resort uses the wonderful gift of nature in the form of a falls. The place is great for people who wants to have a good time and relax. Besides that, the resort also offers tours and activities revolving around the natural terrain around the resort. If you want to have a relaxing time, Calimbo Farm Resort is definitely a place for you.</p>
        <!--<div class="lists-2">
          <ul class="list-1">
            <li><a href="#">Maecenas mattis venena</a></li>
            <li><a href="#">Nam accumsan miac</a></li>
            <li><a href="#">Rhoncus luctus erat nisl</a></li>
            <li><a href="#">Ultrices neque vel</a></li>
            <li><a href="#">Morbi ut augue ut risus</a></li>
          </ul>
          <ul class="list-1">
            <li><a href="#">Interdum mattis uisque</a></li>
            <li><a href="#">Eget erat eget mi laoreet</a></li>
            <li><a href="#">Pharetra eget tortor</a></li>
            <li><a href="#">Vestibulum scelerisque</a></li>
            <li><a href="#">Tristique ullamcorper</a></li>
          </ul>
          <ul class="list-1 last">
            <li><a href="#">Integer eros massa</a></li>
            <li><a href="#">Viverra quis pharetra</a></li>
            <li><a href="#">Ultrices mauris phasellus</a></li>
            <li><a href="#">Purus sapiepiscing</a></li>
            <li><a href="#">Tempus eget faucibus</a></li>
          </ul>
        </div>
        <a href="#" class="button">Read more</a>-->
        
        <!--<h2 class="top-2 p3">Buying guide</h2>
        <p class="p5">Maecenas quis lacus eu tortor blandit venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean.</p>
        <div class="wrap block-2"> <a href="#"><img src="images/page2-img1.jpg" alt="" class="img-border"></a> <a href="#"><img src="images/page2-img2.jpg" alt="" class="img-border"></a> <a href="#"><img src="images/page2-img3.jpg" alt="" class="img-border"></a> <a href="#" class="last"><img src="images/page2-img4.jpg" alt="" class="img-border"></a> </div>
      </div>-->
      


      <!--<div class="grid_4">
        <div class="left-1">
          <h2 class="top-1 p3">Find your home</h2>
          <form id="form-1" class="form-1 bot-2" action="#">
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
          <h2 class="p3">Best offers</h2>
          <p class="color-1">Maecenas quis lacus eu tortor blandit venenatis aliquam </p>
          <p>Sit amet arcu justo in commodo consect etur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu. </p>
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
