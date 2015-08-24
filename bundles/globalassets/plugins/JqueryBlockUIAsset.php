<?php

namespace wfcreations\metronic\bundles\globalassets\plugins;

use yii\web\AssetBundle;

class JqueryBlockUIAsset extends AssetBundle {

    public $sourcePath = '@bower/blockui';
    public $depends = [
        'yii\jui\JuiAsset',
    ];

}
