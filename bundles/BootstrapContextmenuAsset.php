<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapContextmenuAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/bootstrap-contextmenu/bootstrap-contextmenu.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
