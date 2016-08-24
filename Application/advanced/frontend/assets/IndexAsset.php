<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/indexSite.css',
		'css/bootstrap.min.css',
		'css/modern-business.css',
		'css/font-awesome',
		'css/font-awesome.min',
		
    ];
    public $js = [
		'js/jquery.js',
		'js/bootstrap.min.js',
		'js/contact_me.js',
		'js/jqBootstrappValidationjs',
		'js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
