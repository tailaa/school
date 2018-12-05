<?php

use yii\db\Migration;

/**
 * Handles the creation of table `faces`.
 */
class m181128_053555_create_faces_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('faces', [
            'id' => $this->primaryKey(),
            'Surname' => $this->string(15)->notNull(),
            'Name' => $this->string(15)->notNull(),
            'DadName' => $this->string(15)->notNull(),
            'Work' => $this->string(),
            'KuzstuWorker' => $this->boolean()
        ]);
}
    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('faces');
        return true;
    }
}
