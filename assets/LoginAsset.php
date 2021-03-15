<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{

    
    public $basePath = '@webroot/custom/login';
    public $baseUrl = '@web/custom/login';
    public $css = [
       'css/style.css'
    ];
    public $js = [
  
            ];
    public $depends = [
       // 'yii\web\YiiAsset',
      //  'yii\bootstrap4\BootstrapAsset',
      //  'rmrevin\yii\fontawesome\cdn\AssetBundle',
        //additional import of third party alert project
        'app\assets\AppAsset',

    ];


}