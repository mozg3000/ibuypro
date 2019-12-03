<?php

use app\rules\OwnerGoodsListRule;
use yii\db\Migration;

/**
 * Class m191203_075908_rbac_init_base
 */
class m191203_075908_rbac_init_base extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $authManager = \Yii::$app->authManager;

        $admin = $authManager->createRole('admin');
        $admin->description = 'Роль админа';
        $authManager->add($admin);

        $user = $authManager->createRole('user');
        $user->description = 'Роль пользователя';
        $authManager->add($user);
        $createGoodsList = $authManager->createPermission('createGoodsList');
        $createGoodsList->description = 'Создание списков покупки';
        $authManager->add($createGoodsList);

        $viewOwnerGoodsList = $authManager->createPermission('viewOwnerGoodsList');
        $viewOwnerGoodsList->description = 'Просмотр и редактирование своих списков покупки';

        $rule = new OwnerGoodsListRule();
        $viewOwnerGoodsList->ruleName = $rule->name;

        $authManager->add($rule);
        $authManager->add($viewOwnerGoodsList);

        $createAllItems = $authManager->createPermission('createAllItems');
        $createAllItems->description = 'Создание любых видов суущностей';
        $authManager->add($createAllItems);

        $authManager->addChild($user, $createGoodsList);
        $authManager->addChild($user, $viewOwnerGoodsList);
        $authManager->addChild($admin,$user);
        $authManager->addChild($admin, $createAllItems);

        $authManager->assign($admin, 3);
        $authManager->assign($user, 2);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $authManager = Yii::$app->authManager;
        $authManager->removeAll();

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191203_075908_rbac_init_base cannot be reverted.\n";

        return false;
    }
    */
}
