<?php

use yii\db\Migration;

/**
 * Handles the creation of table `studyplan`.
 */
class m181212_034200_create_studyplan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('studyplan', [
            'id' => $this->primaryKey(),
            'id_naprovleniya' => $this->integer()->notNull(),
            'version' => $this->integer()->notNull(),
            'god_obucheniya' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('studyplan');
    }
}
