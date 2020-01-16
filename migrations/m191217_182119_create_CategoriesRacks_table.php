<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CategoriesRacks}}`.
 */
class m191217_182119_create_CategoriesRacks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CategoriesRacks}}', [
            'id' => $this->primaryKey(),
            'id_rack' => $this->addForeignKey(m191215_124058_create_racks_table::id),
            'id_categories' => $this->addForeignKey(m191213_182113_create_categories_table::id)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CategoriesRacks}}');
    }
}
