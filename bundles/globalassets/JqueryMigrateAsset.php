<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class JqueryMigrateAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/jquery-migrate.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
