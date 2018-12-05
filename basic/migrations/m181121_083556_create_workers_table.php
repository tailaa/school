<?php

use yii\db\Migration;

/**
 * Handles the creation of table `workers`.
 */
class m181121_083556_create_workers_table extends Migration
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
       
         $this->createindex(
            'idx-workers-id_worker',
            'workers', 
            'id_worker'
         );

        $this->addForeignKey(
            'fk-workers-id_worker',
            'workers',
            'id_worker',
            'faces',
            'id',
            'CASCADE'
        );
    }
    

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('workers');
    }
}