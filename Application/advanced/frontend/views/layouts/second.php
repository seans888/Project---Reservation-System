<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Dropdown;
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
<link rel ="icon" href="images/ResortLogo.png" type="image/jpg"/>
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
                        $menuItems[] = ['label' => 'Services',
                        'items' => [
                            ['label' => 'Reservation', 'url' => ['site/about']],
                        ],
                        ];
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
             <div class="clearfix"></div>
          </div>
      </div>
      <div class="banner">
            <div class="banner-info text-center">
            <h1>Tarangban Falls &
            CALIMBO FARM RESORT</h1>
            <span></span>
            <!--<ul>
             <li><a class="scroll" href="#">Nature</a><i class="line"></i></li>
             <li><a class="scroll" href="#">Relaxation</a><i class="line2"></i></li>
             <li><a class="scroll" href="#">Adventure</a></li>
             <div class="clearfix"></div>
            </ul>-->
            <br />
            <h3>The majestic place in the city of waterfalls</h3>
            <br />
            <div class="clearfix"></div>
            </div>
      </div>
</div>
<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
          <script>
                  $(function() {
                    $( "#datepicker,#datepicker1" ).datepicker();
                  });
          </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<script type="text/javascript" src="js/JFCore.js"></script>
<script type="text/javascript" src="js/JFForms.js"></script>
<!-- Set here the key for your domain in order to hide the watermark on the web server -->
<script type="text/javascript">
    (function() {
        JC.init({
            domainKey: ''
        });
    })();
</script>
<div class="online_reservation">
           <div class="b_room">
              <div class="booking_room">
                  <div class="reservation">
                      <ul>              
                         <li  class="span1_of_1 left">
                             <h5>Arrival</h5>
                             <div class="book_date">
                                 <form>
                                 <input class="date" id="datepicker" type="text" value="2/08/2013" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}">
                                 </form>
                             </div>                 
                         </li>
                         <li  class="span1_of_1 left">
                             <h5>Depature</h5>
                             <div class="book_date">
                             <form>
                                <input class="date" id="datepicker1" type="text" value="22/08/2013" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '22/08/2013';}">
                             </form>
                             </div>     
                         </li>
                         <li class="span1_of_1">
                             <h5>Room type</h5>
                             <!----------start section_room----------->
                             <div class="section_room">
                                  <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                        <option value="null">Standard Single Room</option>
                                        <option value="null">Suite room</option>         
                                        <option value="AX">Single room</option>
                                        <option value="AX">Double room</option>
                                  </select>
                             </div> 
                         </li>
                         <li class="span1_of_3">
                                <div class="date_btn">
                                    <form>
                                        <input type="submit" value="View Prices" />
                                    </form>
                                </div>
                         </li>
                         <div class="clearfix"></div>
                     </ul>
                 </div>
              </div>
                <div class="clearfix"></div>
          </div>
      </div>
</div>
<!---->
<div class="package text-center">
     <div class="container">
         <h3>Book A Reservation</h3>
         <p>Sed euismod sem id consequat rutrum. Ut convallis lorem a orci mollis, eu vulputate libero aliquet. Praesent egestas nisi sed purus tincidunt faucibus. Aliquam lobortis orci lacus, sed faucibus augue dapibus vitae. Ut vitae mi sapien. Phasellus a eros justo.
         Curabitur odio massa, tincidunt nec nibh sit amet</p>
        <!-- requried-jsfiles-for owl -->
                <link href="css/owl.carousel.css" rel="stylesheet">
                                <script src="js/owl.carousel.js"></script>
                                    <script>
                                $(document).ready(function() {
                                  $("#owl-demo").owlCarousel({
                                    items : 1,
                                    lazyLoad : true,
                                    autoPlay : true,
                                    navigation : true,
                                    navigationText :  false,
                                    pagination : false,
                                  });
                                });
                                </script>
            <!-- //requried-jsfiles-for owl -->
          <div id="owl-demo" class="owl-carousel">
             
              <div class="item text-center image-grid"> 
                    <ul>
                    <li> <img src="https://media-cdn.tripadvisor.com/media/photo-s/08/b0/81/af/dulang-resort-and-resto.jpg" alt=""></li>               
                     <li><img src="https://edge.media.datahc.com/HI135223823.jpg" alt=""></li>                
                     <li><img src="http://pix4.agoda.net/hotelimages/280/280746/280746_15082010240034667209.jpg?s=800x" alt=""></li>
                     </ul>
              </div>
			  <div class="item text-center image-grid"> 
                    <ul>
                    <li><img src="http://housebeauty.net/wp-content/uploads/2014/07/Great-Modern-Home-Office-Design-Interior-in-Minimalist-Ideas-for-Small-Bedrooms-Decoration-Used-Wooden-Furniture.jpg" alt=""></li>               
                     <li><img src="http://www.sohogrand.com/wp-content/uploads/sites/2/2015/01/deluxesuitelivingroom-1200x800-c-default.jpg" alt=""></li>                
                     <li><img src="http://www.bega-hotel.ru/upload/iblock/7e7/7e74433722f9338cbf045c5d17b2a3cc.JPG" alt=""></li>
                     </ul>
              </div>
              <div class="item text-center image-grid"> 
                    <ul>
                    <li> <img src="http://eaglepointresort.com.ph/wp-content/uploads/EPR-Resto-and-Bar-3_mini-a76e7f6de91.jpg" alt=""></li>               
                     <li><img src="http://assets.inhabitat.com/wp-content/blogs.dir/1/files/2012/01/Villa-Escudero-Waterfalls-Restauran.jpg" alt=""></li>                
                     <li><img src="http://3.bp.blogspot.com/-NH78XhxcBoI/Vp4_gdYK98I/AAAAAAAARyo/b2iDRMW6U8s/s1600/DSC_7090.JPG" alt=""></li>
                     </ul>
              </div>
          </div>        
     </div>
</div>
<!---->
<!---->
<div class="rooms text-center">
     <!--<div class="container">
         <h3>Our Room Types</h3>
         <div class="room-grids">
             <div class="col-md-4 room-sec">
                 <img src="http://www.twinoakshotel.co.uk/wp-content/uploads/2014/10/2496207_23_z.jpg" alt="standard double room" style="width:350px; height:200px"/>
                 <h4>Standard Double Room</h4>
                 <p>All rooms are equipped with a flat-screen digital TV, free tea and coffee facilities, a desk area, free Wi-Fi access, and a private bathroom with complimentary toiletries.</p>
                 <div class="items">
                     <li><a href="#"><span class="img1"> </span></a></li>
                     <li><a href="#"><span class="img2"> </span></a></li>
                     <li><a href="#"><span class="img3"> </span></a></li>
                     <li><a href="#"><span class="img4"> </span></a></li>
                     <li><a href="#"><span class="img5"> </span></a></li>
                     <li><a href="#"><span class="img6"> </span></a></li>
                 </div>
             </div>
             <div class="col-md-4 room-sec">
                 <img src=http://www.twinoakshotel.co.uk/wp-content/uploads/2014/10/4154127.jpg alt="superior double room" style="width:350px; height:200px"/>
                 <h4>Superior Double Room</h4>
                 <p>All our superior double rooms are fully en-suite with king size bed, flat-screen digital TV, free tea and coffee facilities, a desk area, free Wi-Fi access, and a private bathroom with complimentary toiletries.</p>
                 <div class="items">                    
                     <li><a href="#"><span class="img1"> </span></a></li>
                     <li><a href="#"><span class="img2"> </span></a></li>
                     <li><a href="#"><span class="img3"> </span></a></li>
                     <li><a href="#"><span class="img4"> </span></a></li>
                     <li><a href="#"><span class="img5"> </span></a></li>
                     <li><a href="#"><span class="img6"> </span></a></li>
                 </div>
             </div>
             <div class="col-md-4 room-sec">
                 <img src="http://www.twinoakshotel.co.uk/wp-content/uploads/2014/10/IMG_9086.jpg" alt="family room" style="width:350px; height:200px"/>
                 <h4>Family Room</h4>
                 <p>Our family room is fully en-suite with king size bed, TV, and hospitality tray. Contains a sofa bed suitable for up to 1 small child.</p>
                 <div class="items">
                     <li><a href="#"><span class="img1"> </span></a></li>
                     <li><a href="#"><span class="img2"> </span></a></li>
                     <li><a href="#"><span class="img3"> </span></a></li>
                     <li><a href="#"><span class="img4"> </span></a></li>
                     <li><a href="#"><span class="img5"> </span></a></li>
                     <li><a href="#"><span class="img6"> </span></a></li>
                 </div>
             </div>
             <div class="clearfix"></div>
             <div class="col-md-4 room-sec">
                 <img src="http://elillyhotel.com/wp-content/uploads/2013/11/single-300x189.jpg" alt="standard single room" style="width:350px; height:200px"/>
                 <h4>Standard Single Room</h4>
                 <p>Each standard rooms feature satellite TV, Internet access, world class guest amenities and bathroom supplies.</p>
                 <div class="items">
                     <li><a href="#"><span class="img1"> </span></a></li>
                     <li><a href="#"><span class="img2"> </span></a></li>
                     <li><a href="#"><span class="img3"> </span></a></li>
                     <li><a href="#"><span class="img4"> </span></a></li>
                     <li><a href="#"><span class="img5"> </span></a></li>
                     <li><a href="#"><span class="img6"> </span></a></li>
                 </div>
             </div>
             <div class="col-md-4 room-sec">
                 <img src="http://alarun.de/img/images/wechselbilder/EZ_Superior_2.jpg" alt="superior single room" style="width:350px; height:200px"/>
                 <h4>Superior Single Room</h4>
                 <p>Our superior single rooms offer an extra long queen-size bed and a large writing desk with many plug sockets. Take a seat in the comfortable armchair and watch television on a larger screen. The bathroom is equipped with a large walk-in shower, a bathrobe is provided.</p>
                 <div class="items">
                     <li><a href="#"><span class="img1"> </span></a></li>
                     <li><a href="#"><span class="img2"> </span></a></li>
                     <li><a href="#"><span class="img3"> </span></a></li>
                     <li><a href="#"><span class="img4"> </span></a></li>
                     <li><a href="#"><span class="img5"> </span></a></li>
                     <li><a href="#"><span class="img6"> </span></a></li>
                 </div>
             </div>
             <div class="col-md-4 room-sec">
                 <img src="http://www.goldenstarhotel.vn/Images/Room/Full/bizmac_full_28382016_013824.jpg" alt="vip room" style="width:350px; height:200px"/>
                 <h4>VIP Room</h4>
                 <p>Our Suite (VIP) Rooms are spacious and efficient. Full-height windows offer expansive vistas of the dramatic cityscape, and king or twin beds provide flexible accommodations. Other thoughtful touches include complimentary Wi-Fi Internet access, and a large, LCD TV with international satellite reception and dozens of choices.</p>
                 <div class="items">
                     <li><a href="#"><span class="img1"> </span></a></li>
                     <li><a href="#"><span class="img2"> </span></a></li>
                     <li><a href="#"><span class="img3"> </span></a></li>
                     <li><a href="#"><span class="img4"> </span></a></li>
                     <li><a href="#"><span class="img5"> </span></a></li>
                     <li><a href="#"><span class="img6"> </span></a></li>
                 </div>
             </div>
             <div class="clearfix"></div>
         </div>
     </div>-->
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