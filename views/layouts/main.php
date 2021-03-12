<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
use app\widgets\Alert;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="<?=Url::to(['/images/uinsa.png'])?>" width="150px" height="150px" alt=""></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div>

    <div class="login-header box-shadow">

    <div class="container-fluid d-flex justify-content-between align-items-center">
		
        <?=$this->render('header')?>
    </div>

    </div>
   


    <div class="login-menu">
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
                <?=$content?>
            </div>
        
    
            <div class="footer-wrap pd-20 mb-20 card-box">
            Copyright © Pusat Sistem Teknologi Informasi Dan Pangkalan Data <?=date('Y')?>
            </div>
        </div>
    </div>

 

    <?php $this->endBody() ?>
  </body>

</html>
<?php $this->endPage() ?>
