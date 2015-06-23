<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapTimepickerAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
    ];
    public $js = [
        'global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
