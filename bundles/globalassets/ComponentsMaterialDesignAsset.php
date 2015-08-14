<?php

namespace wfcreations\metronic\bundles\globalassets;

use wfcreations\metronic\bundles\GlobalAsset;

class ComponentsMaterialDesignAsset extends GlobalAsset {

    public $css = [
        'css/components-md.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
