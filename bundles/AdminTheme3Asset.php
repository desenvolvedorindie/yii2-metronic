<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AdminTheme3Asset extends AssetBundle {

    const THEME_BLUE_HOKI = 'blue-hoki.css';
    const THEME_BLUE_STEEL = 'blue-steel.css';
    const THEME_DEFAULT = 'default.css';
    const THEME_GREEN_HAZE = 'green-haze.css';
    const THEME_PURPLE_PLUM = 'purple-plum.css';
    const THEME_PURPLE_STUDIO = 'purple-studio.css';
    const THEME_RED_INTENSE = 'red-intense.css';
    const THEME_RED_SUNGLO = 'red-sunglo.css';
    const THEME_YELLOW_CRUSTA = 'yellow-crusta.css';
    const THEME_YELLOW_ORANGE = 'yellow-orange.css';
    
    public $sourcePath = '@wfcreations/metronic/assets/admin/layout3/';
    public $css = [
        'css/themes/default.css',
        'css/custom.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
        'wfcreations\metronic\bundles\globalassets\MetronicAsset',
        'wfcreations\metronic\bundles\globalassets\ComponentsAsset',
        'wfcreations\metronic\bundles\globalassets\PluginsAsset',
        'wfcreations\metronic\bundles\admin\AdminLayout3Asset',
        'wfcreations\metronic\bundles\admin\QuickSidebarAsset',
        'wfcreations\metronic\bundles\InitAsset',
    ];

}
