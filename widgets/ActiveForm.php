<?php

namespace wfcreations\metronic\widgets;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\ActiveFormAsset;

class ActiveForm extends \yii\widgets\ActiveForm {

    const BUTTONS_ALIGN_LEFT = 'left';
    const BUTTONS_ALIGN_RIGHT = 'right';
    const BUTTONS_POSITION_TOP = 'top';
    const BUTTONS_POSITION_BOTTOM = 'bottom';
    const TYPE_HORIZONTAL = 'horizontal';
    const TYPE_VERTICAL = 'vertical';
    const TYPE_INLINE = 'inline';

    public $separated = false;
    public $stripped = false;
    public $bordered = false;
    public $labelStripped = false;
    public $type = self::TYPE_VERTICAL;

    /**
     * @var array the [[ActiveForm]] buttons.
     * Note that if are empty option 'items', then will not generated element is wrapped buttons.
     * It is an array of the following structure:
     * ```php
     * [
     *     //optional, horizontal align
     *     'align' => ActiveForm::BUTTONS_POSITION_LEFT,
     *     //optional, vertical position
     *     'position' => ActiveForm::BUTTONS_POSITION_BOTTOM,
     *      //optional, array of buttons
     *     'items' => [
     *         Button::widget('label' => 'Save', 'options' => ['type' => 'submit']),
     *         Button::widget('label' => 'Back'),
     *     ],
     *     // optional, the HTML attributes (name-value pairs) for the form actions tag.
     *     'options' => ['class' => 'fluid']
     * ]
     * ```
     */
    public $buttons = [];
    public $tagOptions = ['class' => 'col-md-9'];
    public $bodyOptions = [];
    public $fieldConfig = [];
    public $fieldClass = 'metronic\widgets\ActiveField';

    public function init() {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }

        switch ($this->type) {
            case self::TYPE_HORIZONTAL:
                if ($this->stripped) {
                    Html::addCssClass($this->options, 'form-row-stripped');
                }
                if ($this->separated) {
                    Html::addCssClass($this->options, 'form-row-seperated');
                }
                if ($this->bordered) {
                    Html::addCssClass($this->options, 'form-bordered');
                }
                if ($this->bordered) {
                    Html::addCssClass($this->options, 'form-label-stripped');
                }
                Html::addCssClass($this->options, 'form-horizontal');
                $this->fieldConfig = ArrayHelper::merge([
                            'labelOptions' => ['class' => 'col-md-3 control-label'],
                            'template' => "{label}\n" . Html::tag('div', "{input}\n{error}\n{hint}", $this->tagOptions),
                                ], $this->fieldConfig);
                break;
            case self::TYPE_INLINE:
                Html::addCssClass($this->options, 'form-inline');
                break;
        }

        if (!isset($this->fieldConfig['class'])) {
            $this->fieldConfig['class'] = ActiveField::className();
        }

        echo Html::beginForm($this->action, $this->method, $this->options);

        echo $this->renderActions(self::BUTTONS_POSITION_TOP);

        Html::addCssClass($this->bodyOptions, 'form-inline');
        echo Html::beginTag('div', $this->bodyOptions);
    }

    public function run() {
        echo Html::endTag('div');
        echo $this->renderActions(self::BUTTONS_POSITION_BOTTOM);
        if (!empty($this->attributes)) {
            $id = $this->options['id'];
            $options = Json::encode($this->getClientOptions());
            $attributes = Json::encode($this->attributes);
            $view = $this->getView();
            ActiveFormAsset::register($view);
            $view->registerJs("jQuery('#$id').yiiActiveForm($attributes, $options);");
        }
        echo Html::endForm();
    }

    public function field($model, $attribute, $options = []) {
        return parent::field($model, $attribute, $options);
    }

    protected function renderActions($currentPosition) {
        $position = ArrayHelper::getValue($this->buttons, 'position', self::BUTTONS_POSITION_BOTTOM);
        if (!empty($this->buttons['items']) && $position == $currentPosition) {
            $actionsOptions = ArrayHelper::getValue($this->buttons, 'options', []);
            Html::addCssClass($actionsOptions, 'form-actions');
            if ($position == self::BUTTONS_POSITION_TOP) {
                Html::addCssClass($actionsOptions, 'top');
            }
            if (isset($this->buttons['align']) && $this->buttons['align'] == self::BUTTONS_ALIGN_RIGHT) {
                Html::addCssClass($actionsOptions, 'right');
            }
            $rowOptions = [];
            $buttons = implode("\n", $this->buttons['items']);
            switch ($this->type) {
                case self::TYPE_HORIZONTAL:
                    Html::addCssClass($actionsOptions, 'fluid');
                    preg_match('#col-md-(\d+)#', $this->fieldConfig['labelOptions']['class'], $matches);
                    if (isset($matches[1])) {
                        $offset = $matches[1];
                        Html::addCssClass($rowOptions, 'col-md-offset-' . $offset);
                        Html::addCssClass($rowOptions, 'col-md-' . 12 - $offset);
                        $buttons = Html::tag('div', $buttons, $rowOptions);
                    }
                    break;
            }

            return Html::tag('div', $buttons, $actionsOptions);
        }

        return '';
    }

}
