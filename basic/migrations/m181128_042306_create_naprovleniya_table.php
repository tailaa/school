<?php

use yii\db\Migration;

/**
 * Handles the creation of table `naprovleniya`. test
 */
class m181128_042306_create_naprovleniya_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('naprovleniya', [
            'id' => $this->primaryKey(),
            'nazvanie' => $this->string()->notNull(),
            'id_ruk' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('naprovleniya');
    }
}
