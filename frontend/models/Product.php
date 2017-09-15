<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $product_name
 * @property string $product_code
 * @property string $product_image
 * @property string $product_price
 * @property string $product_sale_off
 * @property integer $begin_date_sale_off
 * @property integer $end_date_sale_off
 * @property integer $category_id
 * @property integer $brand_id
 * @property integer $size_id
 * @property integer $color_id
 * @property integer $material_id
 * @property integer $rate_id
 * @property integer $status
 * @property string $keyword
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property OrderDetails[] $orderDetails
 * @property Brands $brand
 * @property Categories $category
 * @property Colors $color
 * @property Materials $material
 * @property Rates $rate
 * @property Sizes $size
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'product_code', 'product_image', 'product_price', 'category_id', 'brand_id', 'size_id', 'color_id', 'material_id', 'rate_id', 'keyword', 'description', 'created_at', 'updated_at'], 'required'],
            [['begin_date_sale_off', 'end_date_sale_off', 'category_id', 'brand_id', 'size_id', 'color_id', 'material_id', 'rate_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['product_name', 'product_code', 'product_image', 'product_price', 'product_sale_off', 'keyword'], 'string', 'max' => 255],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => Color::className(), 'targetAttribute' => ['color_id' => 'id']],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['material_id' => 'id']],
            [['rate_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rate::className(), 'targetAttribute' => ['rate_id' => 'id']],
            [['size_id'], 'exist', 'skipOnError' => true, 'targetClass' => Size::className(), 'targetAttribute' => ['size_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'product_code' => 'Product Code',
            'product_image' => 'Product Image',
            'product_price' => 'Product Price',
            'product_sale_off' => 'Product Sale Off',
            'begin_date_sale_off' => 'Begin Date Sale Off',
            'end_date_sale_off' => 'End Date Sale Off',
            'category_id' => 'Category ID',
            'brand_id' => 'Brand ID',
            'size_id' => 'Size ID',
            'color_id' => 'Color ID',
            'material_id' => 'Material ID',
            'rate_id' => 'Rate ID',
            'status' => 'Status',
            'keyword' => 'Keyword',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::className(), ['id' => 'color_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::className(), ['id' => 'material_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRate()
    {
        return $this->hasOne(Rate::className(), ['id' => 'rate_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSize()
    {
        return $this->hasOne(Size::className(), ['id' => 'size_id']);
    }
}
