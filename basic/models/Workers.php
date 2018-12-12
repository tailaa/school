<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workers".
 *
 * @property int $id
 * @property int $id_worker
 * @property int $id_type
 * @property string $address
 *
 * @property Faces $worker
 */
class Workers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_worker', 'id_type'], 'required'],
            [['id_worker', 'id_type'], 'integer'],
            [['address'], 'string', 'max' => 255],
            [['id_worker'], 'exist', 'skipOnError' => true, 'targetClass' => Faces::className(), 'targetAttribute' => ['id_worker' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_worker' => 'Id Worker',
            'id_type' => 'Id Type',
            'address' => 'Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Faces::className(), ['id' => 'id_worker']);
    }
}
