<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class GlobalAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $publishOptions = [
        'except' => [
            'plugins/'
        ],
    ];

}
