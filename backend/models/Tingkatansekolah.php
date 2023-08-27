<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tingkatansekolah".
 *
 * @property int $id
 * @property string $kodetingkatan
 * @property string $namatingkatan
 */
class Tingkatansekolah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tingkatansekolah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kodetingkatan', 'namatingkatan'], 'required'],
            [['kodetingkatan'], 'string', 'max' => 10],
            [['namatingkatan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kodetingkatan' => 'Tingkatan',
            'namatingkatan' => 'Nama Tingkatan',
        ];
    }
}
