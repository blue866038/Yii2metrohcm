<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Liên hệ';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div id="f-masonry" class="ff-pdl">
    <div class="row bg-white">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ trả lời sớm nhất có thể.
        </div>

    <?php else: ?>

        <p>
            Nếu bạn có yêu cầu kinh doanh hoặc các câu hỏi khác, xin vui lòng điền vào mẫu dưới đây để liên hệ với chúng tôi. Cảm ơn bạn.
        </p>

        <div class="row">
            <div class="col-sm-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-sm-4">{image}</div><div class="col-sm-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Gửi thư', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        <?= Html::resetButton('Làm mới', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
</div>
