<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapGrowlAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $js = [
        'global/plugins/bootstrap-growl/jquery.bootstrap-growl.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
