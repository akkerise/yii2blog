<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $content
 * @property integer $blog_id
 * @property integer $parent_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Blogs $blog
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'blog_id', 'created_at', 'updated_at'], 'required'],
            [['blog_id', 'parent_id', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string', 'max' => 255],
            [['content'], 'unique'],
            [['blog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::className(), 'targetAttribute' => ['blog_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'blog_id' => 'Blog ID',
            'parent_id' => 'Parent ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'blog_id']);
    }

    /**
     * @inheritdoc
     * @return CommentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CommentsQuery(get_called_class());
    }
}
