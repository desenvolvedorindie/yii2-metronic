<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class FullcalendarAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/fullcalendar/fullcalendar.min.css',
    ];
    public $js = [
        'plugins/fullcalendar/fullcalendar.min.js',
    ];
    public $depends = [
        'yii\web\AssetBundle\MomentAsset',
    ];

}
