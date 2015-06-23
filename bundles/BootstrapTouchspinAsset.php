<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapTouchspinAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/bootstrap-touchspin/bootstrap.touchspin.min.css',
    ];
    public $js = [
        'global/plugins/bootstrap-touchspin/bootstrap.touchspin.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
