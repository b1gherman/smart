<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jenisskpp".
 *
 * @property int $id
 * @property string $namajeniskpp
 */
class Jenisskpp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenisskpp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namajenisskpp'], 'required'],
            [['namajenisskpp'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namajenisskpp' => 'Jenis SKPP',
        ];
    }
}
