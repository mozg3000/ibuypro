<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%connections}}`.
 */
class m200117_104858_drop_ConnectionAddress_column_drop_ConnectionStatus_column_from_connections_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%connections}}', 'ConnectionAddress');
        $this->dropColumn('{{%connections}}', 'ConnectionStatus');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%connections}}', 'ConnectionAddress', $this->string(100));
        $this->addColumn('{{%connections}}', 'ConnectionStatus', $this->int(5));
    }
}
