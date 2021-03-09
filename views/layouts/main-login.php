<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use kartik\nav\NavX;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="login-page">
    <?php $this->beginBody() ?>
    <div class="login-box bg-white box-shadow border-radius-10">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                         <div class="login-brand">
                            
                        </div>
                        <?=Alert::widget()?>
                        <?=$content?>

                        <div class="simple-footer">
                        </div>
                    
                </div>
            </div>
        </section>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>