<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "typetem".
 *
 * @property int $id
 * @property int $id_type
 * @property string $vid
 */
class Typetem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'typetem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_type'], 'required'],
            [['id_type'], 'integer'],
            [['vid'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_type' => 'Id Type',
            'vid' => 'Vid',
        ];
    }
}
