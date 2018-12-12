<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `role`.
 */
class m181205_142958_drop_role_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('role');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('role', [
            'id' => $this->primaryKey(),
        ]);
    }
}
