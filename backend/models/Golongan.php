<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "golongan".
 *
 * @property int $id
 * @property string $kode_gol
 * @property string $pangkat
 *
 * @property Pegawai[] $pegawais
 */
class Golongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_gol', 'pangkat'], 'required'],
            [['kode_gol'], 'string', 'max' => 10],
            [['pangkat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_gol' => 'Kode Gol',
            'pangkat' => 'Pangkat',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::className(), ['id_gol' => 'id']);
    }
}
