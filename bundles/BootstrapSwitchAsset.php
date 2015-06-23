<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapSwitchAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
    ];
    public $js = [
        'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
