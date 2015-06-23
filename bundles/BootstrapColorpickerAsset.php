<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapColorpickerAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $css = [
        'global/plugins/bootstrap-colorpicker/css/colorpicker.css',
    ];
    public $js = [
        'global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
