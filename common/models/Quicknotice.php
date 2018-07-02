<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_quicknotice}}".
 *
 * @property int $id
 * @property string $date
 * @property string $title
 * @property string $image
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property int $status
 */
class Quicknotice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_quicknotice}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'title', 'description'], 'required'],
            [['date', 'created_at', 'updated_at', 'image', 'status'], 'safe'],
            [['description'], 'string'],
            [['title', 'image'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'title' => 'Title',
            'image' => 'Image',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }
}
