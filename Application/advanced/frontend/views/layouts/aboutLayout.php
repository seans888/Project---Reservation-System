<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
<title>Tarangban Falls & Calimbo Farm Resort</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="icon" href="images/ResortLogo.png" type="image/jpg"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery.min.js"></script>
</head>
<body>
<!--header starts-->
<div class="header">
     <div class="top-header">
         <div class="container">
             <div class="logo">
                 <a href="index.html"><img src="images/logo.png"/></a>
             <div class="clearfix"></div>
             </div>
             <span class="menu"> </span>
             <div class="m-clear"></div>
             <div class="wrap">
                <?php
                    NavBar::begin([
                        'brandLabel' => Html::img('images/ResortLogo_small.png'),
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                        'class' => 'navbar-inverse navbar-fixed-top',
                        ],
                    ]);
                    $menuItems = [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'About', 'url' => ['/site/about']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
                    ];
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                    } else {
                        $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>';
                    }
                    echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                ]);
                NavBar::end();
                ?>
             </div>
          </div>
      </div>
</div>
<!---->
<div class="main_bg">
     <div class="container">
         <div class="main">           
               <ul class="service_list">
                 <li>
                     <div class="ser_img">
                            <a href="details.html">
                            <img src="images/ser_pic1.jpg" alt="" />
                            <span class="next"> </span>
                            </a>
                      </div>    
                        <a href="details.html"><h3>Wifi-Internet</h3></a>
                        <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                        <h4><a  href="details.html">Lorem ipsum</a></h4>
                 </li>
                 <li>
                     <div class="ser_img">
                            <a href="details.html">
                            <img src="images/ser_pic2.jpg" alt="" />
                            <span class="next"> </span>
                            </a>
                     </div> 
                     <a href="details.html"><h3>Airy lobby pool</h3></a>
                     <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                     <h4><a href="details.html">Nulla accumsan</a></h4>
                 </li>
                 <li>
                     <div class="ser_img">
                            <a href="details.html">
                            <img src="images/ser_pic3.jpg" alt="" />
                            <span class="next"> </span>
                            </a>
                     </div>                     
                        <a href="details.html"><h3>Laundry</h3></a>
                        <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                        <h4><a href="details.html">Vestilum feliing</a></h4>
                 </li>
                 <li>
                     <div class="ser_img">
                            <a href="details.html">
                            <img src="images/ser_pic4.jpg" alt="" />
                            <span class="next"> </span>
                            </a>
                     </div>                     
                        <a href="details.html"><h3>Spa</h3></a>
                        <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                        <h4><a href="details.html">Nulla commodo</a></h4>
                 </li>
                    <div class="clear"></div>
              </ul>
              
              <ul class="service_list top">
                 <li>
                     <div class="ser_img">
                         <a href="details.html">
                         <img src="images/ser_pic5.jpg" alt="" />
                         <span class="next"> </span>
                         </a>
                     </div>                     
                        <a href="details.html"><h3>Best Cooking</h3></a>
                        <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                        <h4><a  href="details.html">Lorem ipsum</a></h4>
                 </li>
                 <li>
                     <div class="ser_img">
                         <a href="details.html">
                         <img src="images/ser_pic6.jpg" alt="" />
                         <span class="next"> </span>
                         </a>
                     </div>                     
                        <a href="details.html"><h3>Swim-up bar</h3></a>
                        <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                        <h4><a href="details.html">Nulla accumsan</a></h4>
                 </li>
                 <li>
                     <div class="ser_img">
                            <a href="details.html">
                            <img src="images/ser_pic7.jpg" alt="" />
                            <span class="next"> </span>
                            </a>
                     </div> 
                        <a href="details.html"><h3>Services</h3></a>
                        <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                        <h4><a href="details.html">Vestilum feliing</a></h4>                                            
                 </li>
                 <li>
                     <div class="ser_img">
                         <a href="details.html">
                         <img src="images/ser_pic8.jpg" alt="" />
                         <span class="next"> </span>
                         </a>
                     </div>     
                        <a href="details.html"><h3>Special Dishes</h3></a>
                        <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                        <h4><a  href="details.html">Lorem ipsum</a></h4>
                 </li>
                    <div class="clear"></div>
              </ul>
             <div class="clear"></div>
           </div>
      </div>
</div>      
<!---->
<div class="fotter">
     <div class="container">
         <h3>143 City Located Hotels World Wide</h3>
         <h4>"Hospitality, Quality & Good Locations. We only provide you with the best hotels" - John Deo</h4>
         <i class="man"></i>
     </div>
</div>
<!---->
<div class="fotter-info">
     <!-- <div class="container">
          <div class="col-md-5 details">
             <div class="hotel-info">-->
             <center>
            <div class="banner-follow">
             <img alt = "Follow us" src = "http://i893.photobucket.com/albums/ac137/thesidewayshouse/followus_zps77de99bc.png" width="250px" height="50px" />
             </div>
             <div class="icons-social">
             <a target="_blank" title="find us on Facebook" href="http://www.facebook.com/KyleVLee">
             <img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a>

             <a target="_blank" title="follow us on Twitter" href="http://www.twitter.com/PLACEHOLDER"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border=0></a>

             <a target="_blank" title="follow us on youtube" href="http://www.youtube.com/PLACEHOLDER"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a>

             <a target="_blank" title="follow us on instagram" href="http://www.instagram.com/PLACEHOLDER"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a>

             <a target="_blank" title="follow us on google plus" href="https://plus.google.com/PLACEHOLDER"><img alt="follow me on google plus" src="https://c866088.ssl.cf3.rackcdn.com/assets/googleplus30x30.png" border=0></a>
             </div>
             <div class = "copy-info">
             © 2016 So-Called-Programmers. <br>All rights reserved.
             </div>
             </center>
            <!--</div>
             <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div> --> 
</div>
<!---->

</body>
</html>
