<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "batascuti".
 *
 * @property int $id
 * @property int|null $idpegawai
 * @property int|null $tahun
 * @property int|null $digunakan
 * @property int|null $sisa
 * @property int|null $tangguhkan
 */
class Batascuti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'batascuti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpegawai', 'tahun', 'digunakan', 'sisa', 'tangguhkan'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idpegawai' => 'Idpegawai',
            'tahun' => 'Tahun',
            'digunakan' => 'Digunakan',
            'sisa' => 'Sisa',
            'tangguhkan' => 'Tangguhkan',
        ];
    }
    
    public function getPegawai() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpegawai']);
    }
}
