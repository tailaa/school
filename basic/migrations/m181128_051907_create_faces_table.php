<?php

use yii\db\Migration;

/**
 * Handles the creation of table `faces`.
 */
class m181128_051907_create_faces_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('faces', [
            'id' => $this->primaryKey(),
            'Surname' => $this->string(),
            'Name' => $this->string(),
            'DadName' => $this->string(),
            'Work' => $this->text(),
            'KuzstuWorker' => $this->bit(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('faces');
    }
}
