<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%connections}}`.
 */
class m191215_121017_create_connections_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%connections}}', [
            'id' => $this->primaryKey(),
            'ConnectionAddress' => $this->string(100)->notNull(),
            'ConnectionStatus' => $this->integer(5)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%connections}}');
    }
}
