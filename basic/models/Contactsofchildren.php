<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactsofchildren".
 *
 * @property int $id
 * @property int $id_child
 * @property int $id_typeContact
 * @property string $address
 */
class Contactsofchildren extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactsofchildren';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_child', 'id_typeContact', 'address'], 'required'],
            [['id_child', 'id_typeContact'], 'integer'],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_child' => 'Id Child',
            'id_typeContact' => 'Id Type Contact',
            'address' => 'Address',
        ];
    }
}
