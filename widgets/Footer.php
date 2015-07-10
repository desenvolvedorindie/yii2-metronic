<?php

namespace wfcreations\metronic\widgets;

use yii\helpers\Html;
use wfcreations\simplelineicons\SLI;

class Footer extends \yii\bootstrap\Widget {

    /**
     * @var string the badge label
     */
    public $label;
    public $icon;

    public function init() {
        parent::init();

        Html::addCssClass($this->options, 'page-footer');
        if (!isset($this->icon)) {
            $this->icon = SLI::icon(SLI::_ARROW_UP);
        }
    }

    public function run() {
        echo Html::beginTag('div', $this->options) . "\n";
        echo Html::tag('div', $this->label, ['class' => 'page-footer-inner']) . "\n";
        echo Html::tag('div', $this->icon, ['class' => 'scroll-to-top']) . "\n";
        echo Html::endTag('div') . "\n";
    }

}
