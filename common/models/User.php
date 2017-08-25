<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Advertisements[] $advertisements
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvertisements()
    {
        return $this->hasMany(Advertisements::className(), ['user_id' => 'id']);
    }
}
