<?php

use yii\db\Migration;

/**
 * Handles the creation of table `type_tem`.
 * Has foreign keys to the tables:
 *
 * - `topics`
 */
class m181205_080309_create_type_tem_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('type_tem', [
            'id' => $this->primaryKey(),
            'id_type' => $this->integer()->notNull(),
            'vid' => $this->string(),
        ]);

        // creates index for column `id_type`
        $this->createIndex(
            'idx-type_tem-id_type',
            'type_tem',
            'id_type'
        );

        // add foreign key for table `topics`
        $this->addForeignKey(
            'fk-type_tem-id_type',
            'type_tem',
            'id_type',
            'topics',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `topics`
        $this->dropForeignKey(
            'fk-type_tem-id_type',
            'type_tem'
        );

        // drops index for column `id_type`
        $this->dropIndex(
            'idx-type_tem-id_type',
            'type_tem'
        );

        $this->dropTable('type_tem');
    }
}
