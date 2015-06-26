<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class UniformAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/uniform/css/uniform.default.css',
    ];
    public $js = [
        'plugins/uniform/jquery.uniform.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
