<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapTabdropAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-tabdrop/css/tabdrop.css',
    ];
    public $js = [
        'plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
