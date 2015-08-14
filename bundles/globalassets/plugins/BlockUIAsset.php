<?php

namespace wfcreations\metronic\bundles\globalassets\plugins;

use yii\web\AssetBundle;

class BlockUIAsset extends AssetBundle {

    public $sourcePath = '@bower/blockui';
    public $js = [
        'jquery.blockUI.js'
    ];

}
