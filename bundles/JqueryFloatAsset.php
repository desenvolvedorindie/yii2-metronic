<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class JqueryFloatAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/flot/jquery.flot.min.js',
        'global/plugins/flot/jquery.flot.resize.min.js',
        'global/plugins/flot/jquery.flot.categories.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
