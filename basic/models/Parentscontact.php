<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parentscontact".
 *
 * @property int $id
 * @property int $id_child
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property int $id_type_contact
 * @property string $address
 *
 * @property Contacttype $typeContact
 */
class Parentscontact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parentscontact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_child', 'id_type_contact'], 'integer'],
            [['id_type_contact'], 'required'],
            [['address'], 'string'],
            [['surname', 'name', 'patronymic'], 'string', 'max' => 255],
            [['id_type_contact'], 'exist', 'skipOnError' => true, 'targetClass' => Contacttype::className(), 'targetAttribute' => ['id_type_contact' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_child' => 'ID ребенка',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'patronymic' => 'Отчество',
            'id_type_contact' => 'ID контакта',
            'address' => 'Адрес',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeContact()
    {
        return $this->hasOne(Contacttype::className(), ['id' => 'id_type_contact']);
    }
}
