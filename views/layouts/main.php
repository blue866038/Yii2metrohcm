<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
<body>
<?php $this->beginBody() ?>

<div class="wrap" style=" background-image:url('../web/images/fundo.jpg');">
    <?php
    NavBar::begin([
        'brandLabel' => 'METRO',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Lines', 'url' => ['/lines/index']],
            
			['label' => 'Stations', 'url' => ['/stations/index']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
           

			['label' => 'Users', 'url' => ['/users/index']],
			['label' => 'Drivers', 'url' => ['/drivers/index']],
			['label' => 'Vehicles', 'url' => ['/vehicles/index']],
			
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container"  ;>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer" style= "height:80px; background-color:#101010; ">
    <div class="container" style="color:#9d9d9d;" >
        <p class="pull-left" ><img src='../web/images/top_ico_01.png' height='50' width='100' /></p>

        <p class="pull-right">Thiết kế bởi Tamptps03530</br> WEB401</p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
