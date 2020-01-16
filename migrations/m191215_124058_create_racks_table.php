<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%racks}}`.
 */
class m191215_124058_create_racks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%racks}}', [
            'id' => $this->primaryKey(),
            'RackName' => $this->string(100)->notNull(),
            'RackAddress' => $this->string(150)->notNull(),
            'RackStatus' => $this->integer(2)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%racks}}');
    }
}
