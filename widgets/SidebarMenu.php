<?php

namespace wfcreations\metronic\widgets;

use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Menu;
use yii\helpers\Url;

class SidebarMenu extends Menu {
    /*
     * Page sidebar options
     */

    const PAGE_SIDEBAR_OPTION_DATA_AUTO_SCROLL = 'data-auto-scroll';
    const PAGE_SIDEBAR_OPTION_DATA_AUTO_SPEED = 'data-auto-speed';

    /*
     * Page sidebar menu classes
     */
    const PAGE_SIDEBAR_MENU_LIGHT = 'page-sidebar-menu-light';
    const PAGE_SIDEBAR_MENU_HOVER_SUBMENU = 'page-sidebar-menu-hover-submenu';
    const PAGE_SIDEBAR_MENU_CLISED = 'page-sidebar-menu-closed';

    /*
     * Page sidebar menu options
     */
    const PAGE_SIDEBAR_MENU_OPTION_DATA_AUTO_SCROLL = 'data-auto-scroll';
    const PAGE_SIDEBAR_MENU_OPTION_DATA_KEEP_EXPAND = 'data-keep-expand';
    const PAGE_SIDEBAR_MENU_OPTION_DATA_AUTO_SPEED = 'data-auto-speed';
    const PAGE_SIDEBAR_MENU_OPTION_DATA_SLIDE_SPEED = 'data-slide-speed';

    public $firstItemCssClass = 'start';
    public $lastItemCssClass = 'last';
    public $submenuTemplate = "\n<ul class='sub-menu'>\n{items}\n</ul>\n";
    public $linkTemplate = '{icon} {label} {badge} {arrow}';
    public $pageSidebarOptions = [];
    public $pageSidebarMenuOptions = [];
    public $itemOptions = [];

    public function init() {
        parent::init();
        $this->_initOptions();
    }

    public function run() {
        echo Html::beginTag('div', $this->options) . "\n";
        echo Html::beginTag('div', $this->pageSidebarOptions) . "\n";

        if ($this->route === null && Yii::$app->controller !== null) {
            $this->route = Yii::$app->controller->getRoute();
        }
        if ($this->params === null) {
            $this->params = Yii::$app->request->getQueryParams();
        }
        $items = $this->normalizeItems($this->items, $hasActiveChild);
        if (!empty($items)) {
            $tag = ArrayHelper::remove($this->pageSidebarMenuOptions, 'tag', 'ul');

            if ($tag !== false) {
                echo Html::tag($tag, $this->renderItems($items), $this->pageSidebarMenuOptions);
            } else {
                echo $this->renderItems($items);
            }
        }

        echo Html::endTag('div') . "\n";
        echo Html::endTag('div') . "\n";
    }

    protected function isItemActive($item) {
        if (isset($item['url']) && is_array($item['url']) && isset($item['url'][0])) {
            $route = Yii::getAlias($item['url'][0]);

            // default router hack
            if ($route === '/' && $this->route === Yii::$app->controller->module->defaultRoute . '/' . Yii::$app->controller->defaultAction) {
                return true;
            }

            if ($route[0] !== '/' && Yii::$app->controller) {
                $route = Yii::$app->controller->module->getUniqueId() . '/' . $route;
            }
            if (ltrim($route, '/') !== $this->route) {
                return false;
            }
            unset($item['url']['#']);
            if (count($item['url']) > 1) {
                $params = $item['url'];
                unset($params[0]);
                foreach ($params as $name => $value) {
                    if ($value !== null && (!isset($this->params[$name]) || $this->params[$name] != $value)) {
                        return false;
                    }
                }
            }

            return true;
        }

        return false;
    }

    protected function renderItem($item) {
        $linkContent = strtr(ArrayHelper::getValue($item, 'template', $this->linkTemplate), [
            '{label}' => $this->_pullItemLabel($item),
            '{icon}' => $this->_pullItemIcon($item),
            '{arrow}' => $this->_pullItemArrow($item),
            '{badge}' => $this->_pullItemBadge($item),
        ]);

        if (isset($item['linkOptions'])) {
            return Html::a($linkContent, $this->_pullItemUrl($item), $item['linkOptions']);
        }
        return Html::a($linkContent, $this->_pullItemUrl($item));
    }

    private function _initOptions() {
        if (!isset($this->pageSidebarMenuOptions['data-keep-expand'])) {
            $this->pageSidebarMenuOptions['data-keep-expand'] = 'false';
        }
        if (!isset($this->pageSidebarMenuOptions['data-auto-scroll'])) {
            $this->pageSidebarMenuOptions['data-auto-scroll'] = 'true';
        }
        if (!isset($this->pageSidebarMenuOptions['data-slide-speed'])) {
            $this->pageSidebarMenuOptions['data-slide-speed'] = '200';
        }

        Html::addCssClass($this->options, 'page-sidebar-wrapper');
        Html::addCssClass($this->pageSidebarOptions, ['page-sidebar', 'navbar-collapse', 'collapse']);
        Html::addCssClass($this->pageSidebarMenuOptions, ['page-sidebar-menu']);
    }

    private function _pullItemUrl($item) {
        $url = ArrayHelper::getValue($item, 'url', '#');

        if ('#' === $url) {
            return 'javascript:;';
        }

        return Url::to($item['url']);
    }

    private function _pullItemLabel($item) {
        $label = ArrayHelper::getValue($item, 'label', '');
        $level = ArrayHelper::getValue($item, 'level', 1);
        if (1 == $level) {
            return Html::tag('span', $label, ['class' => 'title']);
        }
        return sprintf(' %s', $label);
    }

    private function _pullItemIcon($item) {
        $icon = ArrayHelper::getValue($item, 'icon', null);
        if ($icon) {
            return Html::tag('i', '', ['class' => $icon]);
        }
        return '';
    }

    private function _pullItemArrow($item) {
        $active = ArrayHelper::getValue($item, 'active', false);
        $items = ArrayHelper::getValue($item, 'items', []);
        if (!empty($items)) {
            return Html::tag('span', '', ['class' => 'arrow' . ($active ? ' open' : '')]);
        }
        return '';
    }

    private function _pullItemBadge($item) {
        if (!isset($item['badge'])) {
            return '';
        }
        return Badge::widget($item['badge']);
    }

}
