<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%categories}}`.
 */
class m200117_055830_drop_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%CategoriesRacks}}');
        $this->dropTable('{{%categories}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'CategoryName' => $this->string(100)->notNull(),
            'CategoryProduct' => $this->string(150)->notNull()
        ]);
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
}
