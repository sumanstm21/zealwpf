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
      
        'css/bootstrap.min.css',
        'css/themes/default-theme.css',
        'css/font-awesome.min.css',
        'css/jquery.tosrus.all.css',
        'css/site.css',
        'css/slick.css',
        'css/style.css',
        'css/superslides.css',
        'style.css',
        'css/animate.css',
//         'css/themes/bridge-theme.css',
//         'css/themes/dark-red-theme.css',
//         
//         'css/themes/green-theme.css',
//         'css/themes/lite-blue-theme.css',
//         'css/themes/orange-theme.css',
//         'css/themes/pink-theme.css',
//         'css/themes/purple-theme.css',
//         'css/themes/red-theme.css',
//         'css/themes/yellow-theme.css',
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
        'js/queryloader2.min.js',
//        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/FlameViewportScale.js',
        'js/jquery.animate-enhanced.min.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.superslides.min.js',
        'js/jquery.tosrus.min.all.js',
        'https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js',
        'js/slick.min.js',
        'js/wow.min.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
