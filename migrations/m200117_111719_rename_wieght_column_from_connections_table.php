<?php

use yii\db\Migration;

/**
 * Class m200117_111719_rename_wieght_column_from_connections_table
 */
class m200117_111719_rename_wieght_column_from_connections_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('connections', 'wieght');
        $this->addColumn('{{%connections}}', 'weight', $this->smallInteger());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('connections', 'weight');
        $this->addColumn('{{%connections}}', 'wieght', $this->smallInteger());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200117_111719_rename_wieght_column_from_connections_table cannot be reverted.\n";

        return false;
    }
    */
}
