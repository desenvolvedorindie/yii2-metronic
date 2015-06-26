<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class JqueryBlockUIAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/jquery.cokie.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
