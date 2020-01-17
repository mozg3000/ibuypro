<?php

use yii\db\Migration;

/**
 * Class m200117_064113_add_x_column_y_column_width_column_height_column_label_column_fill_column_angle_column_top_colunm_id_shop_column
 */
class m200117_064113_add_x_column_y_column_width_column_height_column_label_column_fill_column_angle_column_top_colunm_id_shop_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('racks', 'x', $this->float());
        $this->addColumn('racks', 'y', $this->float());
        $this->addColumn('racks', 'width', $this->float());
        $this->addColumn('racks', 'height', $this->float());
        $this->addColumn('racks', 'label', $this->string());
        $this->addColumn('racks', 'fill', $this->string(7));
        $this->addColumn('racks', 'angle', $this->float());
        $this->addColumn('racks', 'top', $this->integer(4));
        $this->addColumn('racks', 'id_shops', $this->integer());

        $this->addForeignKey(
            'fk_Racks_Shops',
            'racks',
            'id_shops',
            'Shops',
            'id',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('racks', 'x');
        $this->dropColumn('racks', 'y');
        $this->dropColumn('racks', 'width');
        $this->dropColumn('racks', 'height');
        $this->dropColumn('racks', 'label');
        $this->dropColumn('racks', 'fill');
        $this->dropColumn('racks', 'angle');
        $this->dropColumn('racks', 'top');
        $this->dropColumn('racks', 'id_shop');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200117_064113_add_x_column_y_column_width_column_height_column_label_column_fill_column_angle_column_top_colunm_id_shop_column cannot be reverted.\n";

        return false;
    }
    */
}
