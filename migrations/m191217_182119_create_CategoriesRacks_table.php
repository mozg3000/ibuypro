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
            'id_rack' => $this->integer()->notNull(),
            'id_categories' => $this->integer()->notNull()
        ]);
        $this->addForeignKey(
            'fk-CategoryRacks_d',
            'CategoriesRacks',
            'id_categories',
            'categories',
            'id');
        $this->addForeignKey(
            'fk-CategoryRacks_fd',
            'CategoriesRacks',
            'id_rack',
            'racks',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CategoriesRacks}}');
    }
}
