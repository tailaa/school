<?php

use yii\db\Migration;

/**
 * Handles the creation of table `childrens_groups`.
 * Has foreign keys to the tables:
 *
 * - `childrens`
 * - `groups`
 */
class m181128_025420_create_junction_table_for_childrens_and_groups_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Students', [
            'childrens_id' => $this->integer(),
            'groups_id' => $this->integer(),
            'PRIMARY KEY(childrens_id, groups_id)',
        ]);

        // creates index for column `childrens_id`
        $this->createIndex(
            'idx-childrens_Students_id',
            'Students',
            'childrens_id'
        );

        // add foreign key for table `childrens`
        $this->addForeignKey(
            'fk-childrens_Students_id',
            'Students',
            'childrens_id',
            'childrens',
            'id',
            'CASCADE'
        );

        // creates index for column `groups_id`
        $this->createIndex(
            'idx-childrens_Students_id',
            'Students',
            'groups_id'
        );

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
        // drops foreign key for table `childrens`
        $this->dropForeignKey(
            'fk-childrens_Students_id',
            'Students'
        );

        // drops index for column `childrens_id`
        $this->dropIndex(
            'idx-childrens_Students_id',
            'Students'
        );

        // drops foreign key for table `groups`
        $this->dropForeignKey(
            'fk-childrens_Students_id',
            'Students'
        );

        // drops index for column `groups_id`
        $this->dropIndex(
            'idx-childrens_Students_id',
            'Students'
        );

        $this->dropTable('Students');
    }
}
