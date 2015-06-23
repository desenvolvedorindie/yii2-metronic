<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapSelectsplitterAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-selectsplitter/bootstrap-selectsplitter.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
