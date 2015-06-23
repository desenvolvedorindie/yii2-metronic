<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class UniformAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/uniform/css/uniform.default.css',
    ];
    public $js = [
        'global/plugins/uniform/jquery.uniform.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
