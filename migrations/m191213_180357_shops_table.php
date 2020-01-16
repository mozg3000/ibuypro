<?php

use yii\db\Migration;

/**
 * Class m191213_180357_shops_table
 */
class m191213_180357_shops_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Shops',[
            'id' => $this->primaryKey(),
            'ShopName' => $this-> string(100)->notNull(),
            'ShopAddress' => $this->string(100)->notNull(),
            'ShopEmail' => $this->string(100)->notNull(),
            'ShopPhone' => $this->integer(20)->notNull()
                ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191213_180357_shops_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191213_180357_shops_table cannot be reverted.\n";

        return false;
    }
    */
}
