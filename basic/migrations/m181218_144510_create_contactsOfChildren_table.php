<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contactsOfChildren`.
 * Has foreign keys to the tables:
 *
 * - `children`
 * - `typeContact`
 */
class m181218_144510_create_contactsOfChildren_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contactsOfChildren', [
            'id' => $this->primaryKey(),
            'id_child' => $this->integer()->notNull(),
            'id_typeContact' => $this->integer()->notNull(),
            'address' => $this->string()->notNull(),
        ]);

        // creates index for column `id_child`
        $this->createIndex(
            'idx-contactsOfChildren-id_child',
            'contactsOfChildren',
            'id_child'
        );

        // add foreign key for table `children`
        $this->addForeignKey(
            'fk-contactsOfChildren-id_child',
            'contactsOfChildren',
            'id_child',
            'children',
            'id',
            'CASCADE'
        );

        // creates index for column `id_typeContact`
        $this->createIndex(
            'idx-contactsOfChildren-id_typeContact',
            'contactsOfChildren',
            'id_typeContact'
        );

        // add foreign key for table `typeContact`
        $this->addForeignKey(
            'fk-contactsOfChildren-id_typeContact',
            'contactsOfChildren',
            'id_typeContact',
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
        // drops foreign key for table `children`
        $this->dropForeignKey(
            'fk-contactsOfChildren-id_child',
            'contactsOfChildren'
        );

        // drops index for column `id_child`
        $this->dropIndex(
            'idx-contactsOfChildren-id_child',
            'contactsOfChildren'
        );

        // drops foreign key for table `typeContact`
        $this->dropForeignKey(
            'fk-contactsOfChildren-id_typeContact',
            'contactsOfChildren'
        );

        // drops index for column `id_typeContact`
        $this->dropIndex(
            'idx-contactsOfChildren-id_typeContact',
            'contactsOfChildren'
        );

        $this->dropTable('contactsOfChildren');
    }
}
