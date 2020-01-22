<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "racks".
 *
 * @property int $id
 * @property float|null $x
 * @property float|null $y
 * @property float|null $width
 * @property float|null $height
 * @property string|null $label
 * @property string|null $fill
 * @property float|null $angle
 * @property int|null $top
 * @property int|null $id_shops
 *
 * @property Shops $shops
 */
class RacksBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'racks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['x', 'y', 'width', 'height', 'angle'], 'number'],
            [['top', 'id_shops'], 'integer'],
            [['label'], 'string', 'max' => 255],
            [['fill'], 'string', 'max' => 7],
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
            'x' => Yii::t('app', 'X'),
            'y' => Yii::t('app', 'Y'),
            'width' => Yii::t('app', 'Width'),
            'height' => Yii::t('app', 'Height'),
            'label' => Yii::t('app', 'Label'),
            'fill' => Yii::t('app', 'Fill'),
            'angle' => Yii::t('app', 'Angle'),
            'top' => Yii::t('app', 'Top'),
            'id_shops' => Yii::t('app', 'Id Shops'),
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
