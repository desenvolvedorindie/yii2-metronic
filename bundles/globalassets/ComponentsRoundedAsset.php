<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class ComponentsRoundedAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'css/components-rounded.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
