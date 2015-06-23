<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapSessiontimeoutAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-selectsplitter/jquery.sessionTimeout.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
