<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = 'Create Blog';
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-create">

    <div class="col-md-offset-3"><h1><?= Html::encode($this->title) ?></h1></div>

    <?= $this->render('_form', [
        'model' => $model,
        'tagGroup' => $tagGroup,
        'userGroup' => $userGroup,
    ]) ?>

</div>
