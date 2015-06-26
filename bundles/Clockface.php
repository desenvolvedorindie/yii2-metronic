<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class CarouselOWLCarousel extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/clockface/css/clockface.css',
    ];
    public $js = [
        'plugins/clockface/js/clockface.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
