<?php

use yii\db\Migration;

/**
 * Handles the creation of table `parentscontact`.
 */
class m181128_042955_create_parentscontact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('parentscontact', [
            'id' => $this->primaryKey(),
            'id_child' => $this->integer(),
            'surname' => $this->string(),
            'name' => $this->string(),
            'patronymic' => $this->string(),
            'id_type_contact' => $this->integer(),
            'address' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('parentscontact');
    }
}
