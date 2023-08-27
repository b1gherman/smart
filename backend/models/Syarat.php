<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "syarat".
 *
 * @property int $id
 * @property string|null $kode
 * @property string|null $syarat
 */
class Syarat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'syarat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['syarat'], 'string'],
            [['kode'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'syarat' => 'Syarat',
        ];
    }
}
