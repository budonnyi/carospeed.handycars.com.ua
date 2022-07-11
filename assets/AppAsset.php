<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/assets/lib/flexslider/flexslider.css",
        "/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css",
        "/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css",
        "/assets/lib/magnific-popup/dist/magnific-popup.css",
        "/assets/lib/simple-text-rotator/simpletextrotator.css",
        "/assets/lib/animate.css/animate.css",
        "/assets/lib/et-line-font/et-line-font.css",
        "/assets/css/style.css",
        "/assets/lib/components-font-awesome/css/font-awesome.min.css",
//        'css/site.css',
        'css/socials.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
    ];
    public $js = [
        "/assets/lib/wow/dist/wow.js",
        "/assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js",
        "/assets/lib/isotope/dist/isotope.pkgd.js",
        "/assets/lib/imagesloaded/imagesloaded.pkgd.js",
        "/assets/lib/flexslider/jquery.flexslider.js",
        "/assets/lib/owl.carousel/dist/owl.carousel.min.js",
        "/assets/lib/magnific-popup/dist/jquery.magnific-popup.js",
        "/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js",
        "/assets/js/plugins.js",
        "/assets/js/main.js",
//        "https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU",
        "/assets/lib/smoothscroll.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
}
