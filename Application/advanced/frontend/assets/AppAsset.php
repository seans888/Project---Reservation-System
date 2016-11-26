<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/JFFormStyle-1.css',
        'css/jquery-ui.css',
        'css/owl.carousel.css',
        'css/style.css',
    ];
    public $js = [
        'js/JFCore.js',
        'js/JFForms.js',
        'js/jquery.flexisel.js',
        'js/jquery.min.js',
        'js/jquery-ui.js',
        'js/owl.carousel.js',
        'js/responsiveslides.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
