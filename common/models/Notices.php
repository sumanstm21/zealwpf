<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_notices}}".
 *
 * @property int $notice_id
 * @property string $date
 * @property string $title
 * @property string $image
 * @property string $description
 * @property string $created_at
 * @property string $update_at
 */
class Notices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_notices}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'title', 'description'], 'required'],
            [['date', 'created_at', 'update_at', 'image'], 'safe'],
            [['description'], 'string'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'notice_id' => 'Notice ID',
            'date' => 'Date',
            'title' => 'Title',
            'image' => 'Image',
            'description' => 'Description',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }
}
