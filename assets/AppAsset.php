<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/lightview.css',
        'css/jquery-ui.min.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        //'js/jquery-1.11.1.min.js',
        'js/jquery-ui.min.js',
        'js/simpslider.js',
        'js/lightview.js',
        'js/script.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapPluginAsset',
    ];
}
