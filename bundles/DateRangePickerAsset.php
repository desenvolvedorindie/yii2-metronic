<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class DateRangePickerAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-daterangepicker/daterangepicker.js',
    ];
    public $css = [
        'global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'wfcreations\metronic\bundles\MomentAsset',
    ];

}
