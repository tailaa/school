<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faces".
 *
 * @property int $id
 * @property string $Surname
 * @property string $Name
 * @property string $DadName
 * @property string $Work
 * @property int $KuzstuWorker
 *
 * @property Workers[] $workers
 */
class Faces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faces';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Surname', 'Name', 'DadName'], 'required'],
            [['Surname', 'Name', 'DadName'], 'string', 'max' => 15],
            [['Work'], 'string', 'max' => 255],
            [['KuzstuWorker'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Surname' => 'Surname',
            'Name' => 'Name',
            'DadName' => 'Dad Name',
            'Work' => 'Work',
            'KuzstuWorker' => 'Kuzstu Worker',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Workers::className(), ['id_worker' => 'id']);
    }
}
