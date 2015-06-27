<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class PluginsAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'css/plugins.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
