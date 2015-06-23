<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapDatepickerAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $css = [
        'global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css',
    ];
    public $js = [
        'global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'wfcreations\metronic\bundles\MomentAsset',
    ];

}
