<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jeniscuti".
 *
 * @property int $id
 * @property string $namajeniscuti
 *
 * @property Cuti[] $cutis
 */
class Jeniscuti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jeniscuti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namajeniscuti'], 'required'],
            [['namajeniscuti'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namajeniscuti' => 'Nama Jenis Cuti',
        ];
    }

    /**
     * Gets query for [[Cutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCutis()
    {
        return $this->hasMany(Cuti::className(), ['id_jeniscuti' => 'id']);
    }
}
