<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class MetronicComponentsAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'css/components.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
