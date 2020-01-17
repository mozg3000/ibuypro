<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%connections}}`.
 */
class m200117_105347_add_firstN_column_add_secondN_column_wieght_column_to_connections_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%connections}}', 'firstN', $this->smallInteger());
        $this->addColumn('{{%connections}}', 'secondN', $this->smallInteger());
        $this->addColumn('{{%connections}}', 'wieght', $this->smallInteger());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%connections}}', 'firstN');
        $this->dropColumn('{{%connections}}', 'secondN');
        $this->dropColumn('{{%connections}}', 'wieght');
    }
}
