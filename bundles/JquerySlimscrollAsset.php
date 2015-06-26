<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class JquerySlimscrollAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
