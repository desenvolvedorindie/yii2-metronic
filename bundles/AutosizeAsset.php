<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AutosizeAsset extends AssetBundle {

    public $sourcePath = '@bower/autosize';
    public $js = [
        'dist/autosize.min.js',
    ];

}
