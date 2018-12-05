<?php

use yii\db\Migration;

/**
 * Class m181128_050517_groups_table
 */
class m181128_050517_groups_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('groups',[
            'id'=> $this->primaryKey(),
            'name'=>$this->string(36)->notNull(),
            'curriculum_id'=>$this->integer()->notNull(),
        ]
        );

        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('groups');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_050517_groups_table cannot be reverted.\n";

        return false;
    }
    */
}
