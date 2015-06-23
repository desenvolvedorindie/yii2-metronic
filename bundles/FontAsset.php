<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class FontAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
    ];

}
