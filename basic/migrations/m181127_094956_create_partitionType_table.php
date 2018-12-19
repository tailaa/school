<?php

use yii\db\Migration;

/**
 * Handles the creation of table `partitionType`.
 */
class m181127_094956_create_partitionType_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('partitionType', [
            'id' => $this->primaryKey(),
            'view' => $this->text()->notnull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('partitionType');
    }
}
