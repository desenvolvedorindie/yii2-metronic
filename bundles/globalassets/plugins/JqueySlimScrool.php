<?php

namespace wfcreations\metronic\bundles\globalassets\plugins;

use yii\web\AssetBundle;

class JqueySlimScrool extends AssetBundle {

    public $sourcePath = '@bower/slimscroll';
    public $js = [
        'jquery.slimscroll.min.js'
    ];

}
