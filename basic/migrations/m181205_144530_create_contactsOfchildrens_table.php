<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contactsOfchildrens`.
 */
class m181205_144530_create_contactsOfchildrens_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contactsOfchildrens', [
            'id' => $this->primaryKey(),
            'id_child' => $this->integer()->notnull(),
            'id_typeOfContact' => $this->integer()->notnull(),
            'address' => $this->string()->notNull(),
        ]);

        $this->createIndex(
            'idx-contactsOfchildrens-id_child',
            'contactsOfchildrens',
            'id_child'
        );

        $this->addForeignKey(
            'fk-contactsOfchildrens-id_child',
            'contactsOfchildrens',
            'id_child',
            'childrens',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-contactsOfchildrens-id_typeOfContact',
            'contactsOfchildrens',
            'id_typeOfContact'
        );

        $this->addForeignKey(
            'fk-contactsOfchildrens-id_typeOfContact',
            'contactsOfchildrens',
            'id_typeOfContact',
            'typeContact',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropForeignKey(
            'fk-contactsOfchildrens-id_child',
            'contactsOfchildrens'
        );

        $this->dropIndex(
            'idx-contactsOfchildrens-id_child',
            'contactsOfchildrens'
        );

        $this->dropForeignKey(
            'fk-contactsOfchildrens-id_typeOfContact',
            'contactsOfchildrens'
        );

        $this->dropIndex(
            'idx-contactsOfchildrens-id_typeOfContact',
            'contactsOfchildrens'
        );

        $this->dropTable('contactsOfchildrens');
    }
}
