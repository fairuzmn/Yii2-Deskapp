<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://use.fontawesome.com/releases/v5.7.2/css/all.css',
     
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap',
         'vendors/styles/icon-font.min.css',
         'vendors/styles/core.css',
         'vendors/styles/style.css',
    ];
    public $js = [
       'vendors/scripts/core.js',
       'vendors/scripts/script.min.js',
       'vendors/scripts/process.js',
       'vendors/scripts/layout-settings.js',
            ];
    public $depends = [
        'yii\web\YiiAsset',
      //  'yii\bootstrap4\BootstrapAsset',
      //  'rmrevin\yii\fontawesome\cdn\AssetBundle',
        //additional import of third party alert project
        'app\assets\SweetAlertAsset',

    ];
}
