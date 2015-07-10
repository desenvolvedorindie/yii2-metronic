<?php

namespace wfcreations\metronic\widgets;

use yii\helpers\Html;
use yii\base\Widget;

class Badge extends Widget {

    const TYPE_DEFAULT = 'default';
    const TYPE_GRAY = 'default';
    const TYPE_PRIMARY = 'primary';
    const TYPE_INFO = 'info';
    const TYPE_SUCCESS = 'success';
    const TYPE_DANGER = 'danger';
    const TYPE_WARNING = 'warning';

    public $label;
    public $type = self::TYPE_DEFAULT;
    public $round = true;

    public function run() {
        $options = [];
        Html::addCssClass($options, 'badge');
        if (!$this->round) {
            Html::addCssClass($options, 'badge-roundless');
        }
        Html::addCssClass($options, 'badge-' . $this->type);

        echo Html::tag('span', $this->label, $options);
    }

}
