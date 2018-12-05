<?php

use yii\db\Migration;

/**
 * Handles the creation of table `control`.
 */
class m181128_032344_create_control_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('control', [
            'id' => $this->primaryKey(),
            'view' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('control');
    }
}
