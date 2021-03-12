<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
$this->title = 'Integrated Information System';
$this->params['breadcrumbs'][] = $this->title;
?>
  <div class="login-header">
           <div class="login-logo text-center">
			
					<img src=<?=Url::to(["/images/uinsa.png"])?> width="147px" height="155px"alt="">
				
			</div>

            <br>
       <h5 class="text-center text-secondary">INTEGRATED INFORMATION SYSTEM</h5>

       </div>
       <br>
       
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput(['placeholder'=>"NIP/NIM"])->label(false) ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder'=>"PASSWORD"])->label(false) ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>


        <div class="form-group">
            <?= Html::submitButton('Sign In', ['class' => 'btn btn-success btn-round btn-block', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
 