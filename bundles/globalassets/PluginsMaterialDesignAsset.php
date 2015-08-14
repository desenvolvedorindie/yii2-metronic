<?php

namespace wfcreations\metronic\bundles\globalassets;

use wfcreations\metronic\bundles\GlobalAsset;

class PluginsMaterialDesignAsset extends GlobalAsset {

    public $css = [
        'css/plugins-md.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
