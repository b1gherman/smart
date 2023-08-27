<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jenissk".
 *
 * @property int $id
 * @property string|null $jenis
 */
class Jenissk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenissk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis' => 'Jenis',
        ];
    }
}
