<?php

namespace app\models;

use Yii;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $icon
 * @property string $category_name
 * @property integer $parent_id
 * @property string $keywords
 * @property string $description
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Products[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['icon', 'category_name', 'keywords', 'description', 'created_at', 'updated_at'], 'required'],
            [['parent_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['file'], 'file'],
            [['icon', 'category_name', 'keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'Icon',
            'category_name' => 'Category Name',
            'parent_id' => 'Parent ID',
            'keywords' => 'Keywords',
            'description' => 'Description'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    public function getCategoriesByParentID($parentid = 0){
        $data = Category::find()->asArray()->where('parent_id=:parentid',['parentid' => $parentid])->all();
        return $data;
    }
}
