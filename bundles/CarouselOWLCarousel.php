<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class CarouselOWLCarousel extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/owl-carousel/owl.carousel.css',
        'global/plugins/owl-carousel/owl.theme.css',
        'global/plugins/owl-carousel/owl.transitions.css',
    ];
    public $js = [
        'global/plugins/owl-carousel/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
