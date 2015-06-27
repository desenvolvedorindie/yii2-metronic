<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class DateRangePickerAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/bootstrap-daterangepicker/daterangepicker.js',
    ];
    public $css = [
        'plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'wfcreations\metronic\bundles\globalassets\MomentAsset',
    ];

}
