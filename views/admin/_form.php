<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use bootui\datetimepicker\Datepicker;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form register-form">

    <?php $form = ActiveForm::begin([
        'id' => 'register-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-sm-4\">{input}</div>\n<div class=\"col-sm-4\">{error}</div>",
            'labelOptions' => ['class' => 'col-sm-4 control-label'],
        ],
    ]); 
    //$items = array('Nam','Nữ');
    ?>
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true])?>
          <!-- dropDownList($items, [
           'prompt' => '-- --'])-->

    <?= $form->field($model, 'birth_date')->widget(Datepicker::className(),
            [
                'format' => 'DD-MM-YYYY',
            ]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
    
     <?= $form->field($model, 'authKey')->textInput(['maxlength' => true]) ?>
    
    <div style="display: none"><?= $form->field($model, 'role')->hiddenInput(['value' => '1'],['class','role-form']) ?></div>

    <div class="col-lg-12">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><?= Html::submitButton($model->isNewRecord ? 'Đăng kí' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary m-left' : 'btn btn-primary']) ?>
         <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>        <br>
        </div>  
        <div class="col-sm-4"></div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
