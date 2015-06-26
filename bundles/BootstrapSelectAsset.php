<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapSelectAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-select/bootstrap-select.min.css',
    ];
    public $js = [
        'plugins/bootstrap-select/bootstrap-select.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
