<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class CarouselOWLCarousel extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/owl-carousel/owl.carousel.css',
        'plugins/owl-carousel/owl.theme.css',
        'plugins/owl-carousel/owl.transitions.css',
    ];
    public $js = [
        'plugins/owl-carousel/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
