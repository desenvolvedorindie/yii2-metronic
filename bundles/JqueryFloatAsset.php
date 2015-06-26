<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class JqueryFloatAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/flot/jquery.flot.min.js',
        'plugins/flot/jquery.flot.resize.min.js',
        'plugins/flot/jquery.flot.categories.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
