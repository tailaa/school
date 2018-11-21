<?php

use yii\db\Migration;

/**
 * Handles the creation of table `post`.
 */
class m181121_035128_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'id_worker' => $this->int(),
            'id_type' => $this->int(),
            'address' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post');
    }
}
