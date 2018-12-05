<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contacttype`.
 */
class m181128_045904_create_contacttype_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contacttype', [
            'id' => $this->primaryKey(),
            'type' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contacttype');
    }
}
