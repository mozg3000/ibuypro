<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%Shops}}`.
 */
class m200117_062551_add_chain_column_to_Shops_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%Shops}}', 'chain', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%Shops}}', 'chain');
    }
}
