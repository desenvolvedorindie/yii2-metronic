<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class JqueryBlockUIAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/jquery.blockui.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
