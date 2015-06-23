<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BackstretchAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $js = [
        'global/plugins/backstretch/jquery.backstretch.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
