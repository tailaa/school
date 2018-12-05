<?php

use yii\db\Migration;

/**
 * Handles the creation of table `parentscontact`.
 * Has foreign keys to the tables:
 *
 * - `contacttype`
 */
class m181128_045604_create_parentscontact_table extends Migration
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
            'id_type_contact' => $this->integer()->notNull(),
            'address' => $this->text(),
        ]);

        // creates index for column `id_type_contact`
        $this->createIndex(
            'idx-parentscontact-id_type_contact',
            'parentscontact',
            'id_type_contact'
        );

<<<<<<< HEAD
        // add foreign key for table `contacttype`
       
=======
        
>>>>>>> 8a4270fb087cc73615c181f0e3131057f1a80282
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `contacttype`
        $this->dropForeignKey(
            'fk-parentscontact-id_type_contact',
            'parentscontact'
        );

        // drops index for column `id_type_contact`
        $this->dropIndex(
            'idx-parentscontact-id_type_contact',
            'parentscontact'
        );

        $this->dropTable('parentscontact');
    }
}
