<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapModalAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-modal/css/bootstrap-modal.css',
        'plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css',
    ];
    public $js = [
        'plugins/bootstrap-modal/js/bootstrap-modal.js',
        'plugins/bootstrap-modal/js/bootstrap-modalmanager.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
