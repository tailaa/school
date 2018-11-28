<?php

use yii\db\Migration;

/**
 * Handles the creation of table `workers`.
 */
class m181121_083555_create_workers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('workers', [
            'id' => $this->primaryKey(),
            'id_worker' => $this->integer()->notNull(),
            'id_type' => $this->integer()->notNull(),
            'address' => $this->string(),
        ]);
        $this->addForeignKey('id_type', 'tbl_type')
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('workers');
    }
}