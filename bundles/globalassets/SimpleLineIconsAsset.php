<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class SimpleLineIconsAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/simple-line-icons/simple-line-icons.min.css',
    ];

}
