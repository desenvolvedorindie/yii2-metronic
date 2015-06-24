<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/scripts/metronic.js',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\LegacyAsset',
        'wfcreations\metronic\bundles\FontAsset',
        'wfcreations\metronic\bundles\SimpleLineIconsAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'wfcreations\metronic\bundles\JuiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'wfcreations\metronic\bundles\JqueryMigrateAsset',
        'wfcreations\metronic\bundles\BootstrapHoverDropdownAsset',
        'wfcreations\metronic\bundles\JquerySlimscrollAsset',
        'wfcreations\metronic\bundles\JqueryBlockUIAsset',
        'wfcreations\metronic\bundles\UniformAsset',
        'dosamigos\switchinput\SwitchAsset',
    ];
}
