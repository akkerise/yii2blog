<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blogs".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $keyword
 * @property string $description
 * @property integer $tag_id
 * @property integer $user_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Tags $tag
 * @property Users $user
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'keyword', 'description', 'tag_id', 'user_id', 'created_at', 'updated_at'], 'required'],
            [['description'], 'string'],
            [['tag_id', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['title', 'content', 'keyword'], 'string', 'max' => 255],
            [['tag_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tag::className(), 'targetAttribute' => ['tag_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'keyword' => 'Keyword',
            'description' => 'Description',
            'tag_id' => 'Tag ID',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tag::className(), ['id' => 'tag_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
