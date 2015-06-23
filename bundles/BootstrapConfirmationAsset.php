<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapConfirmationAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $js = [
        'global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
