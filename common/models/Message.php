<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_message}}".
 *
 * @property int $id
 * @property string $image
 * @property string $message
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_message}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message', 'name'], 'required'],
            [['message'], 'string'],
            [['image'], 'safe'],
            [['image', 'name'], 'string', 'max' => 255],
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'message' => 'Message',
            'name' => 'Principle Name',
        ];
    }
}
