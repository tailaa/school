<?php

use yii\db\Migration;

/**
 * Handles the creation of table `students`.
 * Has foreign keys to the tables:
 *
 * - `childrens`
 * - `groups`
 */
class m181205_032500_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('students', [
            'id' => $this->primaryKey(),
            'childrens_id' => $this->integer()->notnull(),
            'group_id' => $this->integer()->notnull(),
        ]);

        // creates index for column `childrens_id`
        $this->createIndex(
            'idx-students-childrens_id',
            'students',
            'childrens_id'
        );

        // add foreign key for table `childrens`
        $this->addForeignKey(
            'fk-students-childrens_id',
            'students',
            'childrens_id',
            'childrens',
            'id',
            'CASCADE'
        );

        // creates index for column `group_id`
        $this->createIndex(
            'idx-students-group_id',
            'students',
            'group_id'
        );

        // add foreign key for table `groups`
        $this->addForeignKey(
            'fk-students-group_id',
            'students',
            'group_id',
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
        // drops foreign key for table `childrens`
        $this->dropForeignKey(
            'fk-students-childrens_id',
            'students'
        );

        // drops index for column `childrens_id`
        $this->dropIndex(
            'idx-students-childrens_id',
            'students'
        );

        // drops foreign key for table `groups`
        $this->dropForeignKey(
            'fk-students-group_id',
            'students'
        );

        // drops index for column `group_id`
        $this->dropIndex(
            'idx-students-group_id',
            'students'
        );

        $this->dropTable('students');
    }
}
