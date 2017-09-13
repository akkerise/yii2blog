<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tag;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tag_id', [])->dropDownList(ArrayHelper::map($dataTag, 'id', 'tag_name'), ['prompt' => 'Select Tag'])->label('Tag') ?>

    <?= $form->field($model, 'user_id')->dropDownList(ArrayHelper::map($dataUser, 'id', 'username'), ['prompt' => 'Select User'])->label('Username') ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
