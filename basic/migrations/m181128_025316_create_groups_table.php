<?php

use yii\db\Migration;

/**
 * Handles the creation of table `groups`.
 */
class m181128_025316_create_groups_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('groups', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'id_syllabus' => $this->integer()->notNUll(),
        ]);
        
        // add foreign key for table `groups`
        $this->addForeignKey(
            'fk-childrens_Students_id',
            'Students',
            'groups_id',
            'groups',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('groups');
    }
}
