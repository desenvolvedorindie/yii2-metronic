<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class DatatableAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'scripts/datatable.js',
    ];

}
