<?php

use yii\db\Migration;

/**
 * Handles the creation of table `childrens`.
 */
class m181121_031002_create_childrens_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('childrens', [
            'id' => $this->primaryKey(),
            'name' => $this->string(36)->notNull(),
            'family' => $this->string(36)->notNull(),
            'patronymic' => $this->string(36)->notNull(),
            'school' => $this->string(36)->notNull(),
            'group' => $this->string(5)->notNull(),
            'class' => $this->string(3)->notNull(),
        ]);
<<<<<<< HEAD
      
       
=======
        // add foreign key for table `students`
      
>>>>>>> 8a4270fb087cc73615c181f0e3131057f1a80282
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('childrens');
    }
}
