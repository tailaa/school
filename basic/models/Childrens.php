<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "childrens".
 *
 * @property int $id
 * @property string $name
 * @property string $family
 * @property string $patronymic
 * @property string $school
 * @property string $group
 * @property string $class
 *
 * @property Students[] $students
 * @property ContactsOfchildrens[] $contactsOfchildrens
 */
class Childrens extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'childrens';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'family', 'patronymic', 'school', 'group', 'class'], 'required'],
            [['name', 'family', 'patronymic', 'school'], 'string', 'max' => 36],
            [['group'], 'string', 'max' => 5],
            [['class'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'family' => 'Фамилия',
            'patronymic' => 'Отчество',
            'school' => 'Школа',
            'group' => 'Группа',
            'class' => 'Класс',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['childrens_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContactsOfchildrens()
    {
        return $this->hasMany(ContactsOfchildrens::className(), ['id_child' => 'id']);
    }
}
