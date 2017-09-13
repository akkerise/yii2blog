<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sizes".
 *
 * @property integer $id
 * @property string $size_name
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Products[] $products
 */
class Size extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sizes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size_name', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['size_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'size_name' => 'Size Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['size_id' => 'id']);
    }
}
