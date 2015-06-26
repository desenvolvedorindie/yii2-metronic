<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapDatepickerAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
    ];
    public $js = [
        'plugins/bootstrap-daterangepicker/daterangepicker.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'wfcreations\metronic\bundles\MomentAsset',
    ];

}
