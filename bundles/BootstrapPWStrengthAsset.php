<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapPWStrengthAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
