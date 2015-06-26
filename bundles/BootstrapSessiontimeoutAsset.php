<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapSessiontimeoutAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/bootstrap-selectsplitter/jquery.sessionTimeout.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
