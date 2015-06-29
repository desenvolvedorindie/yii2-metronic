<?php

namespace wfcreations\metronic;

use Yii;
use yii\web\AssetBundle;
use wfcreations\metronic\bundles\ThemeAsset;

class Metronic extends \yii\base\Component {

    /**
     * @var AssetBundle
     */
    public static $assetsBundle;

    /**
     * Theme style
     */
    const THEME_STYLE_SQUARE = 'default';
    const THEME_STYLE_ROUNDED = 'rounded';

    /**
     * Layout
     */
    const LAYOUT_FLUID = 'default';
    const LAYOUT_BOXED = 'boxed';

    /**
     * Header
     */
    const HEADER_DEFAULT = 'default';
    const HEADER_FIXED = 'fixed';

    /**
     *  Top menu dropdown
     */
    const TOP_MENU_DROPDOWN_LIGHT = 'light';
    const TOP_MENU_DROPDOWN_DARK = 'dark';

    /**
     * Sidebar
     */
    const SIDEBAR_DEFAULT = 'default';
    const SIDEBAR_FIXED = 'fixed';

    /**
     * Sidebar menu
     */
    const SIDEBAR_MENU_ACCORDION = 'accordion';
    const SIDEBAR_MENU_HOVER = 'hover';

    /**
     * Sidebar style
     */
    const SIDEBAR_STYLE_DEFAULT = 'default';
    const SIDEBAR_STYLE_LIGHT = 'light';

    /**
     * Sidebar position
     */
    const SIDEBAR_POSITION_LEFT = 'left';
    const SIDEBAR_POSITION_RIGHT = 'right';

    /**
     * Footer
     */
    const FOOTER_DEFAULT = 'default';
    const FOOTER_FIXED = 'fixed';

    /**
     * Search string
     */
    const PARAM_VERSION = '{version}';
    const PARAM_THEME = '{theme}';

    /**
     * UI Colors blue
     */
//    const UI_COLOR_BLUE = 'blue';
//    const UI_COLOR_BLUE_HOKI = 'blue-hoki';
//    const UI_COLOR_BLUE_STEEL = 'blue-steel';
//    const UI_COLOR_BLUE_MADISON = 'blue-madison';
//    const UI_COLOR_BLUE_CHAMBRAY = 'blue-chambray';
//    const UI_COLOR_BLUE_EBONYCLAY = 'blue-ebonyclay';
//
//    /**
//     * UI Colors green
//     */
//    const UI_COLOR_GREEN = 'green';
//    const UI_COLOR_GREEN_MEADOW = 'green-meadow';
//    const UI_COLOR_GREEN_SEAGREEN = 'green-seagreen';
//    const UI_COLOR_GREEN_TORQUOISE = 'green-torquoise';
//    const UI_COLOR_GREEN_JUNGLE = 'green-jungle';
//    const UI_COLOR_GREEN_HAZE = 'green-haze';
//
//    /**
//     * UI Colors red
//     */
//    const UI_COLOR_RED = 'red';
//    const UI_COLOR_RED_PINK = 'red-pink';
//    const UI_COLOR_RED_SUNGLO = 'red-sunglo';
//    const UI_COLOR_RED_INTENSE = 'red-intense';
//    const UI_COLOR_RED_THUNDERBIRD = 'red-thunderbird';
//    const UI_COLOR_RED_FLAMINGO = 'red-flamingo';
//    const UI_COLOR_RED_HAZE = 'red-haze';
//
//    /**
//     * UI Colors yellow
//     */
//    const UI_COLOR_YELLOW = 'yellow';
//    const UI_COLOR_YELLOW_GOLD = 'yellow-gold';
//    const UI_COLOR_YELLOW_CASABLANCA = 'yellow-casablanca';
//    const UI_COLOR_YELLOW_CRUSTA = 'yellow-crusta';
//    const UI_COLOR_YELLOW_LEMON = 'yellow-lemon';
//    const UI_COLOR_YELLOW_SAFFRON = 'yellow-saffron';
//
//    /**
//     * UI Colors purple
//     */
//    const UI_COLOR_PURPLE = 'purple';
//    const UI_COLOR_PURPLE_PLUM = 'purple-plum';
//    const UI_COLOR_PURPLE_MEDIUM = 'purple-medium';
//    const UI_COLOR_PURPLE_STUDIO = 'purple-studio';
//    const UI_COLOR_PURPLE_WISTERIA = 'purple-wisteria';
//    const UI_COLOR_PURPLE_SEANCE = 'purple-seance';
//
//    /**
//     * UI Colors grey
//     */
//    const UI_COLOR_GREY = 'grey';
//    const UI_COLOR_GREY_CASCADE = 'grey-cascade';
//    const UI_COLOR_GREY_SILVER = 'grey-silver';
//    const UI_COLOR_GREY_STEEL = 'grey-steel';
//    const UI_COLOR_GREY_CARARRA = 'grey-cararra';
//    const UI_COLOR_GREY_GALLERY = 'grey-gallery';

    /**
     * @var string Theme style
     */
    public $themeStyle = self::THEME_STYLE_ROUNDED;

    /**
     * @var string Layout
     */
    public $layout = self::LAYOUT_FLUID;

    /**
     * @var string Header
     */
    public $header = self::HEADER_FIXED;

    /**
     * @var string Top menu dropdown
     */
    public $topMenuDropdown = self::TOP_MENU_DROPDOWN_LIGHT;

    /**
     * @var string Sidebar display
     */
    public $sidebar = self::SIDEBAR_DEFAULT;

    /**
     * @var string Sidebar display
     */
    public $sidebarMenu = self::SIDEBAR_MENU_ACCORDION;

    /**
     * @var string Sidebar style
     */
    public $sidebarStyle = self::SIDEBAR_STYLE_DEFAULT;

    /**
     * @var string Sidebar position
     */
    public $sidebarPosition = self::SIDEBAR_POSITION_LEFT;

    /**
     * @var string Footer display
     */
    public $footer = self::FOOTER_DEFAULT;

    /**
     * @var string Component name used in the application
     */
    public static $componentName = 'metronic';

    /**
     * Inits module
     */
    public function init() {
        
    }

    /**
     * @return Metronic Get Metronic component
     */
    public static function getComponent() {
        return Yii::$app->{static::$componentName};
    }

    /**
     * Get base url to metronic assets
     * @param $view View
     * @return string
     */
    public static function getAssetsUrl($view) {
        if (static::$assetsBundle === null) {
            static::$assetsBundle = static::registerThemeAsset($view);
        }

        return (static::$assetsBundle instanceof AssetBundle) ? static::$assetsBundle->baseUrl : '';
    }

    /**
     * Register Theme Asset
     * @param $view View
     * @return AssetBundle
     */
    public static function registerThemeAsset($view) {
        return static::$assetsBundle = ThemeAsset::register($view);
    }

}
