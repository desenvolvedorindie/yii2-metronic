<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootboxAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/bootbox/bootbox.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
