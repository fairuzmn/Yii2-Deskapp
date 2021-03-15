<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use yii\helpers\Url;
use app\widgets\Alert;
use app\assets\LoginAsset;

LoginAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <link rel="icon" type="image/png" href="<?=Url::to(["/images/uinsa.png"])?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="login-page">
    <?php $this->beginBody() ?>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center" style="background: url(<?=Url::to(["/images/background.png"])?>) repeat;    background-color: #fff;" >
            <div class="container ">

                <div class="row align-item-center">
                <div class="col-md-6 col-lg-7 kolom2" >
                        
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="<?=Url::to(["/images/bg3.jpg"])?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="<?=Url::to(["/images/bg2.jpg"])?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="<?=Url::to(["/images/bg1.jpg"])?>" alt="Third slide">
                        </div>
                    </div>
                    
                </div>
									
                </div>
                <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
     
    
                         <div class="login-brand">
                            
                        </div>
                        <?=Alert::widget()?>
                        <?=$content?>

                        <div class="simple-footer">
                        </div>
                </div>        
                    
                </div>
            </div>
       
    </div>
    </div>
    
    <div class="footer-wrap pd-20 mb-20 copyright" style="background: url(<?=Url::to(["/images/background.png"])?>) repeat;    background-color: #fff;">
    Copyright © Pusat Sistem Teknologi Informasi Dan Pangkalan Data <?=date('Y')?>
            </div>
    
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
