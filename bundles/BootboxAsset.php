<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootboxAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $js = [
        'global/plugins/bootbox/bootbox.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
