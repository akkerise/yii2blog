<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brands".
 *
 * @property integer $id
 * @property string $brand_name
 * @property integer $brand_phone_number
 * @property string $brand_address
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Products[] $products
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brands';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_name', 'brand_phone_number', 'brand_address', 'created_at', 'updated_at'], 'required'],
            [['brand_phone_number', 'created_at', 'updated_at'], 'integer'],
            [['brand_name', 'brand_address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_name' => 'Brand Name',
            'brand_phone_number' => 'Brand Phone Number',
            'brand_address' => 'Brand Address',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['brand_id' => 'id']);
    }
}
