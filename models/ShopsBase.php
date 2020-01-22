<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Shops".
 *
 * @property int $id
 * @property string $ShopName
 * @property string $ShopAddress
 * @property string|null $ShopEmail
 * @property string|null $ShopPhone
 * @property string|null $description
 * @property string|null $map
 * @property string|null $chain
 *
 * @property Racks[] $racks
 */
class ShopsBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Shops';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ShopName', 'ShopAddress'], 'required'],
            [['description', 'map'], 'string'],
            [['ShopName', 'ShopAddress', 'ShopEmail'], 'string', 'max' => 100],
            [['ShopPhone'], 'string', 'max' => 20],
            [['chain'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ShopName' => Yii::t('app', 'Shops Name'),
            'ShopAddress' => Yii::t('app', 'Shops Address'),
            'ShopEmail' => Yii::t('app', 'Shops Email'),
            'ShopPhone' => Yii::t('app', 'Shops Phone'),
            'description' => Yii::t('app', 'Description'),
            'map' => Yii::t('app', 'Map'),
            'chain' => Yii::t('app', 'Chain'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRacks()
    {
        return $this->hasMany(Racks::className(), ['id_shops' => 'id']);
    }
}
