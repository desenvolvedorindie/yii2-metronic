<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapEditableAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $css = [
        'global/plugins/bootstrap-editable/css/bootstrap-datepicker3.min.css',
    ];
    public $js = [
        'global/plugins/bootstrap-editable/js/bootstrap-datepicker.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'wfcreations\metronic\bundles\MomentAsset',
    ];

}
