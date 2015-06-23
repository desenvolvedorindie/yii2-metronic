<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AutosizeAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $js = [
        'global/plugins/autosize/autosize.min.js',
    ];

}
