<?php


namespace app\components;

use app\models\Users;
use yii\base\Component;
use yii\web\IdentityInterface;

class AuthComponent extends Component
{
    /**
     * @param Users $model
     * @return bool
     */
    public function signIn(IdentityInterface &$model)
    {
        if(!$model->validate(['username', 'password'])){
            return false;
        }
        $user = $this->getUserByName($model->username);
        if (!$this->validatePassword($model->password, $user->password_hash)){
            $model->addError('password', 'Неправильный логин или пароль');
            return false;
        }
        return \Yii::$app->user->login($user, 3600);
    }
    public function signUp(Users &$model):bool
    {
        if(!$model->validate(['username', 'email','password'])){
            return false;
        }

        $model->password_hash = $this->generateHashPassword($model->password);
        $model->auth_key = $this->generateAuthKey();
        $model->token = $this->generateToken();

        if($model->save()){
            $role = \Yii::$app->authManager->getRole('user');
            \Yii::$app->authManager->assign($role, $model->getId());
            return true;
        }
        return false;
    }
    private function validatePassword($password, $passwordHash)
    {
        return \Yii::$app->security->validatePassword($password,$passwordHash);
    }
    public function getUserByName($name):Users
    {
        return Users::find()->andWhere(['username' => $name])->one();
    }

    private function generateToken():string
    {
        return \Yii::$app->security->generateRandomString();
    }
    private function generateAuthKey():string
    {
        return \Yii::$app->security->generateRandomString();
    }

    private function generateHashPassword(string $password): string
    {
        return \Yii::$app->security->generatePasswordHash($password);
    }
}