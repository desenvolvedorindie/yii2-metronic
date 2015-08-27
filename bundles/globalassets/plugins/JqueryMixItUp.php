<?php

namespace wfcreations\metronic\bundles\globalassets\plugins;

use yii\web\AssetBundle;

class JqueryMixItUp extends AssetBundle {

    public $sourcePath = '@vendor/patrickkunka/mixitup/build';
    public $js = [
        'jquery.mixitup.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
