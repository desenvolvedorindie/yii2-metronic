<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapSelectsplitterAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/bootstrap-selectsplitter/bootstrap-selectsplitter.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
