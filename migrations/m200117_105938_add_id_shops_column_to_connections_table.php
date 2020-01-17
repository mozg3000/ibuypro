<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%connections}}`.
 */
class m200117_105938_add_id_shops_column_to_connections_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%connections}}', 'id_shops', $this->integer()->notNull());
        $this->addForeignKey(
            'fk_connections_shops',
            '{{%connections}}',
            'id_shops',
            'Shops',
            'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_connections_shops', 'connections');
        $this->dropColumn('{{%connections}}', 'id_shops');
    }
}
