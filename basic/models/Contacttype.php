<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacttype".
 *
 * @property int $id
 * @property string $type
 *
 * @property Parentscontact[] $parentscontacts
 */
class Contacttype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacttype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Тип контакта',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentscontacts()
    {
        return $this->hasMany(Parentscontact::className(), ['id_type_contact' => 'id']);
    }
}
