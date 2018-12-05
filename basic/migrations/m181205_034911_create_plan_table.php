<?php

use yii\db\Migration;

/**
 * Handles the creation of table `plan`.
 * Has foreign keys to the tables:
 *
 * - `naprovleniya`
 */
class m181205_034911_create_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('plan', [
            'id' => $this->primaryKey(),
            'id_naprovleniya' => $this->integer()->notNull(),
            'version' => $this->integer()->notNull(),
            'god_obucheniya' => $this->integer()->notNull(),
        ]);

        // creates index for column `id_naprovleniya`
        $this->createIndex(
            'idx-plan-id_naprovleniya',
            'plan',
            'id_naprovleniya'
        );

        // add foreign key for table `naprovleniya`
        $this->addForeignKey(
            'fk-plan-id_naprovleniya',
            'plan',
            'id_naprovleniya',
            'naprovleniya',
            'id_naprovleniya',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `naprovleniya`
        $this->dropForeignKey(
            'fk-plan-id_naprovleniya',
            'plan'
        );

        // drops index for column `id_naprovleniya`
        $this->dropIndex(
            'idx-plan-id_naprovleniya',
            'plan'
        );

        $this->dropTable('plan');
    }
}
