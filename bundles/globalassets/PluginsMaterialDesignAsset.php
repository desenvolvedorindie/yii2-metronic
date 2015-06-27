<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class PluginsMaterialDesignAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'css/plugins-md.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
