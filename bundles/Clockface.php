<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class CarouselOWLCarousel extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/clockface/css/clockface.css',
    ];
    public $js = [
        'global/plugins/clockface/js/clockface.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
