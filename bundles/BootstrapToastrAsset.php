<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapToastrAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/bootstrap-toastr/toastr.min.css',
    ];
    public $js = [
        'global/plugins/bootstrap-toastr/toastr.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
