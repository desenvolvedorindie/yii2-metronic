<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class BootstrapConfirmationAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/bootstrap-confirmation/bootstrap-confirmation.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
