<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ads".
 *
 * @property integer $id
 * @property integer $cities_id
 * @property integer $users_id
 * @property integer $categories_id
 * @property string $title
 * @property string $text
 * @property integer $price
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Categories $categories
 * @property Cities $cities
 * @property Users $users
 * @property AdsAttributesValue[] $adsAttributesValues
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cities_id', 'users_id', 'categories_id', 'title', 'text', 'created_at', 'updated_at'], 'required'],
            [['cities_id', 'users_id', 'categories_id', 'price', 'created_at', 'updated_at'], 'integer'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['categories_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['categories_id' => 'id']],
            [['cities_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['cities_id' => 'id']],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['users_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cities_id' => 'Cities ID',
            'users_id' => 'Users ID',
            'categories_id' => 'Categories ID',
            'title' => 'Title',
            'text' => 'Text',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(Category::className(), ['id' => 'categories_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasOne(City::className(), ['id' => 'cities_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsAttributesValues()
    {
        return $this->hasMany(AdsAttributesValue::className(), ['ads_id' => 'id']);
    }
}
