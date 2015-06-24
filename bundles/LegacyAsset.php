<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class LegacyAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/respond.min.js',
        'global/plugins/excanvas.min.js',
    ];
    public $jsOptions = ['condition' => 'lte IE9'];

}
