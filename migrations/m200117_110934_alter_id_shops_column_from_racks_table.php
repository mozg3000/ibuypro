<?php

use yii\db\Migration;

/**
 * Class m200117_110934_alter_id_shops_column_from_racks_table
 */
class m200117_110934_alter_id_shops_column_from_racks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('racks', 'id_shops', $this->integer()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('racks', 'id_shops', $this->integer());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200117_110934_alter_id_shops_column_from_racks_table cannot be reverted.\n";

        return false;
    }
    */
}
