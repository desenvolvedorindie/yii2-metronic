<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class JqueryBlockUIAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/jquery.cokie.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
