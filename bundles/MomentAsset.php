<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class MomentAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/moment.min.js',
    ];

}
