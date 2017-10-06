<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 12/09/2017
 * Time: 15:36
 */
/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\views\widgets\HeaderWidget;
use frontend\views\widgets\SliderWidget;
use frontend\views\widgets\FooterWidget;
use frontend\views\widgets\LeftSidebarWidget;
use frontend\views\widgets\HeaderTopWidget;
use frontend\views\widgets\HeaderMiddleWidget;
use frontend\views\widgets\HeaderBottomWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="<?= Yii::$app->homeUrl . 'frontend/' ?>web/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?= Yii::$app->homeUrl . 'frontend/' ?>web/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?= Yii::$app->homeUrl . 'frontend/' ?>web/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= Yii::$app->homeUrl . 'frontend/' ?>web/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= Yii::$app->homeUrl . 'frontend/' ?>web/images/ico/apple-touch-icon-57-precomposed.png">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header id="header"><!--header-->

    <?= HeaderTopWidget::widget() ?>

    <?= HeaderMiddleWidget::widget() ?>

    <?= HeaderBottomWidget::widget() ?>

</header><!--/header-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?= LeftSidebarWidget::widget() ?>
            </div>

            <div class="col-sm-9 padding-right">
                <?= $content ?>
            </div>
        </div>
    </div>
</section>

<?= FooterWidget::widget() ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
