<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property integer $id
 * @property string $image_name
 * @property string $image_src
 * @property integer $blog_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_name', 'image_src', 'blog_id', 'created_at', 'updated_at'], 'required'],
            [['blog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::className(), 'targetAttribute' => ['blog_id' => 'id']],
            [['image_name', 'image_src'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_name' => 'Image Name',
            'image_src' => 'Image Src',
            'blog_id' => 'Blog ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
