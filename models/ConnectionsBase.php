<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "connections".
 *
 * @property int $id
 * @property int|null $firstN
 * @property int|null $secondN
 * @property int $id_shops
 * @property int|null $weight
 *
 * @property Shops $shops
 */
class ConnectionsBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'connections';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstN', 'secondN', 'id_shops', 'weight'], 'integer'],
            [['id_shops'], 'required'],
            [['id_shops'], 'exist', 'skipOnError' => true, 'targetClass' => Shops::className(), 'targetAttribute' => ['id_shops' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'firstN' => Yii::t('app', 'First N'),
            'secondN' => Yii::t('app', 'Second N'),
            'id_shops' => Yii::t('app', 'Id Shops'),
            'weight' => Yii::t('app', 'Weight'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShops()
    {
        return $this->hasOne(Shops::className(), ['id' => 'id_shops']);
    }
}
