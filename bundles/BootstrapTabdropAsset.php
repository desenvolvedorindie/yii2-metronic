<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapTabdropAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/bootstrap-tabdrop/css/tabdrop.css',
    ];
    public $js = [
        'global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
