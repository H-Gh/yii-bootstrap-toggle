<?php
/**
 * User: h.ghasempour
 * Date: 8/2/2018
 * Time: 11:17 AM
 */

namespace Hgh\YiiBootstrapToggle;

/**
 * Class YiiBootstrapToggleAsset
 * @package Hgh\YiiBootstrapToggle
 */
class YiiBootstrapToggleAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/hgh/yii-bootstrap-toggle/src/res';

    public $css = [
        'css/bootstrap-toggle.min.css'
    ];

    public $js = [
        'js/bootstrap-toggle.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}