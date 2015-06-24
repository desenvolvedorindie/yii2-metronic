<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class MetronicComponentsAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/css/components.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
