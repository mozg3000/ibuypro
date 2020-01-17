<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%RackName_column_RackAddress_column_RackSatus_to_racks}}`.
 */
class m200117_070314_drop_RackName_column_RackAddress_column_RackSatus_to_racks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('racks', '{{%RackName}}');
        $this->dropColumn('racks', '{{%RackAddress}}');
        $this->dropColumn('racks', '{{%RackStatus}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('racks', 'RackName', $this->string(100)->notNull());
        $this->addColumn('racks', 'RackAddress', $this->string(150)->notNull());
        $this->addColumn('racks', 'RackStatus', $this->string(2)->notNull());
    }
}