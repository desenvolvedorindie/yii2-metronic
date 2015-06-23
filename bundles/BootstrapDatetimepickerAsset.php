<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapDatetimepickerAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $css = [
        'global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
    ];
    public $js = [
        'global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'wfcreations\metronic\bundles\MomentAsset',
    ];

}
