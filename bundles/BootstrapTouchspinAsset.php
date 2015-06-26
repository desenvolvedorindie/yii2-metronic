<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapTouchspinAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-touchspin/bootstrap.touchspin.min.css',
    ];
    public $js = [
        'plugins/bootstrap-touchspin/bootstrap.touchspin.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
