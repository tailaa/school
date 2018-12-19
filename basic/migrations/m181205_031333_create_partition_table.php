<?php

use yii\db\Migration;

/**
 * Handles the creation of table `partition`.
 */
class m181205_031333_create_partition_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('partition', [
            'id' => $this->primaryKey(),
            'id_discipline' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'type' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey(
            'fk-partition-type',
            'partition',
            'type',
            'partitionType',
            'id',
            'CASCADE'    
               );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('partition');
    }
}
