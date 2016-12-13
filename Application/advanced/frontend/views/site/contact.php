<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\ActiveForm;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\captcha\Captcha;

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

             <span class="menu"> </span>
             <div class="m-clear"></div>
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
          
<!---->
<div class="contact-bg">
     <div class="container">
          <div class="contact-us">              
                <div class="contact-us_left">
                    <div class="contact-us_info">
                        <h3 class="style">Find Us Here</h3>
                            <div class="map">
                                <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color: #242424;text-shadow: 0 1px 0 #ffffff;text-align: left;font-size: 0.7125em;padding: 5px;font-weight: 600;">View Larger Map</a></small>
                            </div>
                    </div>
                 <div class="company_address">
                        <h3 class="style">Hotel Information :</h3>
                        <p>500 Lorem Ipsum Dolor Sit,</p>
                        <p>22-56-2-9 Sit Amet, Lorem,</p>
                        <p>USA</p>
                        <p>Phone:(00) 222 666 444</p>
                        <p>Fax: (000) 000 00 00 0</p>
                        <p>Email: <a href="mailto:info@example.com">info(at)myhotel.com</a></p>
                        <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
                   </div>
                </div>              
                <div class="contact_right">
                    <h3 class="style">Contact Us</h3>
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'subject') ?>

                            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>      
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