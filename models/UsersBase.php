<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string|null $token
 * @property string|null $auth_key
 * @property string $create_at
 */
class UsersBase extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
////            [['username', 'email', 'password_hash'], 'required'],
            [['username', 'password_hash'], 'required'],
            [['create_at'], 'safe'],
            [['username'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 255],
            [['password_hash'], 'string', 'max' => 300],
            [['token', 'auth_key'], 'string', 'max' => 150]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'token' => Yii::t('app', 'Token'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'create_at' => Yii::t('app', 'Create At'),
        ];
    }
}
