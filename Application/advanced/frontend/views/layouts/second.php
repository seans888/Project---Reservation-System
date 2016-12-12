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
             <div class="top-menu">
                <ul>
                     <li class="active"><a href="index.php?r=site%2Findex">HOME</a></li>
                     <li><a class="scroll" href="index.php?r=site%2Fabout">ABOUT</a></li>
                     <li><a class="scroll" href="index.php?r=site%2Frestaurant">RESTAURANT</a></li>
                     <li><a class="scroll" href="index.php?r=site%2Fconference">CONFERENCE</a></li>
                     <li><a class="scroll" href="index.php?r=site%2Fbooking">BOOKING</a></li>
                     <li><a class="scroll" href="index.php?r=site%2Fcontact">CONTACT US</a></li>
                </ul>
                <script>
                    $("span.menu").click(function(){
                        $(".top-menu ul").slideToggle(200);
                    });
                </script>
             </div>
             <div class="clearfix"></div>
          </div>
      </div>
      <div class="banner">
            <div class="banner-info text-center">
            <h3>Welcome to</h3>
            <h1>Calimbo Farm Resort</h1>
            <span></span>
            <ul>
             <li><a class="scroll" href="#">Nature</a><i class="line"></i></li>
             <li><a class="scroll" href="#">Relaxation</a><i class="line2"></i></li>
             <li><a class="scroll" href="#">Adventure</a></li>
             <div class="clearfix"></div>
            </ul>
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
         <h3>Book A Package</h3>
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
                                    pagination : true,
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
     <div class="container">
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
      <div class="container">
          <div class="col-md-5 details">
             <div class="hotel-info">
                 <h4>ABOUT THIS HOTEL</h4>
                 <p>Suspendisse erat mi, tincidunt sit amet massa quis, commodo fermentum diam. Sed nec dui nec nunc tempor interdum.</p>
                 <p>Ut vulputate augue urna, ut porta dolor imperdiet a. Vestibulum nec leo eu magna aliquam ornare.</p>
             </div>
             <div class="news">
                 <h4>LATEST NEWS</h4>
                 <h5>Grand Hotel Joins DeluxelHotels</h5>
                 <a href="#">15 AUG</a>
                 <h5>Happy Chirstmas To Everyone</h5>
                 <a href="#">15 AUG</a>
                 <h5>Best Places To Visit 2014</h5>
                 <a href="#">15 AUG</a>
                 <h5>Various Offers</h5>
                 <a href="#">15 AUG</a>     
             </div>
                <div class="clearfix"></div>
         </div>
         <div class="col-md-7 details">
             <div class="join">
                 <h4>JOIN DELUXEHOTELS</h4>
                 <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus vestibulum blandit egestas. 
                 Nam id lectus vel orci luctus consectetur eget id elit. In tortor odio, pellentesque eu arcu sit amet, lacinia euismod nisi. Aliquam sodales tristique mauris ac fermentum.
                 Donec vel varius ipsum. Pellentesque vitae mollis massa. </p>
                 <p>There is no costs or whatsoever so sign up today!</p>
                 <a href="#">READ MORE</a>
             </div>
             <div class="member">
             <h4>MEMBERS AREA</h4>
             <form>
             <p>Username</p>
             <input type="text" placeholder="" required/>
             <p>Password</p>
             <input type="password" placeholder="" required/>       
             <input type="submit" value="LOGIN"/>
             </form>
             </div>
             <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
     <h6>Template by <a href="http://w3layouts.com/">W3layouts</h6>   
</div>
<!---->

</body>
</html>