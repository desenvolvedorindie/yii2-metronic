<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $depends = [
        'wfcreations\metronic\bundles\FontAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
    public $jsOptions = [
        'conditions' => [
            'plugins/respond.min.js' => 'if lt IE 9',
            'plugins/excanvas.min.js' => 'if lt IE 9',
        ],
    ];

}
