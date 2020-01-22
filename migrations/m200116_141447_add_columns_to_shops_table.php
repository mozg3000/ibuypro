<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%shops}}`.
 */
class m200116_141447_add_columns_to_shops_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('Shops', 'description', $this->text());
        $this->addColumn('Shops', 'map', $this->text());


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('Shops', 'description', );
        $this->dropColumn('Shops', 'map');

    }
}
