<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'product_name',
            'product_code',
            'product_image',
            'product_price',
            'product_sale_off',
            'begin_date_sale_off',
            'end_date_sale_off',
            'category_id',
            'brand_id',
            'size_id',
            'color_id',
            'material_id',
            'rate_id',
            'status',
            'keyword',
            'description:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
