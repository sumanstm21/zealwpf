<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_gallery}}".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $image4
 * @property string $image5
 * @property string $image6
 * @property string $image7
 * @property string $image8
 * @property string $image9

 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_gallery}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'image'], 'required'],
            [['image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'image8', 'image9'], 'safe'],
            [['title', 'image', 'image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'image8', 'image9'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'image1' => 'Image 1',
            'image2' => 'Image 2',
            'image3' => 'Image 3',
            'image4' => 'Image 4',
            'image5' => 'Image 5',
            'image6' => 'Image 6',
            'image7' => 'Image 7',
            'image8' => 'Image 8',
            'image9' => 'Image 9',
        ];
    }
    
    public function getpath()
    {
        return Yii::$app->basePath.'/web/images/';
    }
    
    public function upload() {
        if ($this->validate()) {
            foreach ($this->image as $file) {
                $file->saveAs(Yii::$app->basePath.'/web/images/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
            
}
