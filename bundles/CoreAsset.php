<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $depends = [
        'wfcreations\legacy\RespondAsset',
        'wfcreations\legacy\ExcanvasAsset',
        'wfcreations\legacy\HTML5ShivAsset',
        'wfcreations\metronic\bundles\FontAsset',
        'wfcreations\metronic\bundles\globalassets\SimpleLineIconsAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'wfcreations\metronic\bundles\globalassets\JuiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'wfcreations\metronic\bundles\globalassets\JqueryMigrateAsset',
        'wfcreations\metronic\bundles\globalassets\BootstrapHoverDropdownAsset',
        'wfcreations\metronic\bundles\globalassets\JquerySlimscrollAsset',
        'wfcreations\metronic\bundles\globalassets\JqueryBlockUIAsset',
        'wfcreations\metronic\bundles\globalassets\UniformAsset',
        'dosamigos\switchinput\SwitchAsset',
    ];

}
