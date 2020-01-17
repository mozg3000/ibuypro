<?php

use yii\db\Migration;

/**
 * Class m200117_055029_alter_ShopEmail_column_to_Shops_table
 */
class m200117_055029_alter_ShopEmail_column_to_Shops_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('Shops', 'ShopEmail', $this->string(100));
        $this->alterColumn('Shops', 'ShopPhone', $this->string(20));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('Shops', 'ShopEmail', $this->string(100)->notNull());
        $this->alterColumn('Shops', 'ShopPhone', $this->integer(20)->notNull());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200117_055029_alter_ShopEmail_column_to_Shops_table cannot be reverted.\n";

        return false;
    }
    */
}
