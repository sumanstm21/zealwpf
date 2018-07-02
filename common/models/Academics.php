<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_academics}}".
 *
 * @property int $id
 * @property string $email
 * @property string $title
 * @property string $image
 * @property string $short_description
 * @property string $description
 * @property string $admission_description
 * @property string $file
 * @property string $created_at
 * @property string $updated_at
 */
class Academics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_academics}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'title', 'description', 'admission_description'], 'required'],
            [['short_description', 'description', 'admission_description'], 'string'],
            [['created_at', 'updated_at', 'image', 'file'], 'safe'],
            [['email', 'title', 'image', 'file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'title' => 'Title',
            'image' => 'Image',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'admission_description' => 'Admission Description',
            'file' => 'File',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
