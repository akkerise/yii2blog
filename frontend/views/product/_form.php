<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_sale_off')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'begin_date_sale_off')->textInput() ?>

    <?= $form->field($model, 'end_date_sale_off')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'brand_id')->textInput() ?>

    <?= $form->field($model, 'size_id')->textInput() ?>

    <?= $form->field($model, 'color_id')->textInput() ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'rate_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
