<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class ComponentsMaterialDesignAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'css/components-md.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
