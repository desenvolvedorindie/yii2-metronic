<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class MetronicPluginsAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'css/plugins.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
