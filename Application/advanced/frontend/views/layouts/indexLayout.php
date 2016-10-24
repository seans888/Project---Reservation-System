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

IndexAsset::register($this);
?>
<head>

<style>
	#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }

</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Calimboracay</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://i1156.photobucket.com/albums/p567/kvlee14/slide-img30_zpskhwkerhk.png');"></div>
                <div class="carousel-caption">
                    <h2>Relax</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://www.wakatobi.com/fileadmin/wakatobi/Images/The_Resort/resort-intro-dl_03.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Explore</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://eaglepointresort.com.ph/wp-content/uploads/eprbanner1.png');"></div>
                <div class="carousel-caption">
                    <h2>Reminisce</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/advanced/frontend/web/index.php?site%2Findex">CALIMBORACAY</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
						NavBar::begin([
							'brandLabel' => 'Tarangban Falls & Calimbo Farm Resort',
							'brandUrl' => Yii::$app->homeUrl,
							'options' => [
								'class' => 'navbar-inverse navbar-fixed-top',
							],
						]);
						$menuItems = [
							['label' => 'Home', 'url' => ['/site/index']],
							['label' => 'About', 'url' => ['/site/about']],
							['label' => 'Contact', 'url' => ['/site/contact']],
							['label' => 'Services', 'items' => [
								['label' => 'Reservation', 'url' => ['reservation/create']],
								['label' => 'Customer', 'url' => ['customer/create']],
								]],
							];
						if (Yii::$app->user->isGuest) {
							//$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
							//$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
						} else {
							$menuItems[] = '<li>'
								. Html::beginForm(['/site/logout'], 'post')
								. Html::submitButton(
									'Logout (' . Yii::$app->user->identity->username . ')',
									['class' => 'btn btn-link']
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Calimboracay
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>Enjoy yourself with our wide variety of offered high-quality services. Click on the button to find out more...</p>
                        <a href="services.html" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Accomodations</h4>
                    </div>
                    <div class="panel-body">
                        <p>Looking for a good room to reserve that fits your standards and likeness? Look no further. Check out our different available rooms for reservation. Click on the button to find out more...</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-picture"></i> Gallery</h4>
                    </div>
                    <div class="panel-body">
                        <p>Curious to see what you will be experiencing if you reserve a room in our resort? Check out our gallery containing different photos of the pools, facilities, etc. Click on the button to find out more...</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Gallery</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://www.atravelmate.com/wp-content/uploads/2015/01/InterContinental-Danang-Sun-Peninsula-Resort.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://cdn.atlantishotel.com/wp-content/uploads/2014/01/atlantis-resort-dumaguete-700x450.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://edge.media.datahc.com/HI144463163.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://edge.media.datahc.com/HI139340963.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://edge.media.datahc.com/HI144463119.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://www.jebiga.com/wp-content/uploads/2013/10/Velaa_Private_Island_Resort_Maldives_14-700x450.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"> Love to Travel? Book Now. </h2>
            </div>
            <div class="col-md-6">
                <p>The resort fee includes:</p>
                <ul>
                    <li>High Speed Internet Access</li>
                    <li>Courtesy Shuttle to and from Tarangban Falls</li>
                    <li>In-room coffee</li>
                    <li>Sports Activities</li>
                    <li>Beach Activities</li>
                    <li>Access to Spa with a Purchased Treatment</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://www.thaipalacephuket.com/images/swimmingpool740x450_1.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p align = "center">Click Here to Book Now. Best Price Guarantee.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="http://localhost/advanced/frontend/web/index.php?r=customer%2Fcreate">Book Now</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Calimboracay 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

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
