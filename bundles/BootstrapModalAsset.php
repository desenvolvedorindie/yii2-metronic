<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapModalAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/bootstrap-modal/css/bootstrap-modal.css',
        'global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css',
    ];
    public $js = [
        'global/plugins/bootstrap-modal/js/bootstrap-modal.js',
        'global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
