<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapPWStrengthAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
