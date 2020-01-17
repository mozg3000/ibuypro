<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "connections".
 *
 * @property int $id
 * @property string $ConnectionAddress
 * @property int $ConnectionStatus
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
            [['ConnectionAddress', 'ConnectionStatus'], 'required'],
            [['ConnectionStatus'], 'integer'],
            [['ConnectionAddress'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ConnectionAddress' => Yii::t('app', 'Connection Address'),
            'ConnectionStatus' => Yii::t('app', 'Connection Status'),
        ];
    }
}
