<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $icon
 * @property integer $category_name
 * @property integer $parent_id
 * @property string $keywords
 * @property string $description
 * @property string $order
 * @property integer $group_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['icon', 'parent_id', 'keywords', 'description', 'order', 'group_id', 'created_at', 'updated_at'], 'required', 'message' => '{attribute} không được để trống !'],
            [['parent_id', 'group_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['icon', 'keywords', 'order'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icon' => 'Ảnh icon',
            'category_name' => 'Tên Danh Mục',
            'parent_id' => 'Danh Mục Cha',
            'keywords' => 'Từ Khóa',
            'description' => 'Mô Tả',
            'order' => 'Hóa Đơn',
            'group_id' => 'Nhóm ID',
            'status' => 'Trạng Thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public $data;

    public function getCategoryParent($parent_id = 0, $level = null)
    {
        $result = Category::find()->asArray()->where('parent_id = :parent_id', [':parent_id' => $parent_id])->all();
        $level .= '-';
        foreach ($result as $k => $v) {
            if ($parent_id == 0) {
                $level = "";
            }
            $this->data[$v['id']] = $level . $v['category_name'];
            self::getCategoryParent($v['id'], $level);
        }
        return $this->data;
    }
}
