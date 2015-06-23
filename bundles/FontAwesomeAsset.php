<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/font-awesome/css/font-awesome.min.css',
    ];

}
