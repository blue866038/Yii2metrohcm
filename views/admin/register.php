<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Users */
?>
<div id="f-masonry" class="ff-pdl">
    <div class="row bg-white">


            <h1 style="text-align: center; padding: 10px 0">Đăng kí tài khoản</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>