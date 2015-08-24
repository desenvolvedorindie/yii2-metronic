<?php

namespace wfcreations\metronic\bundles\globalassets\plugins;

use yii\web\AssetBundle;

class JqueryNestableAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-nestable';
    public $js = [
        'jquery.nestable.js'
    ];
    public $depends = [
        'yii\jui\JuiAsset',
    ];

}
