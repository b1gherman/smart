<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "naikjabatan".
 *
 * @property int $id
 * @property string|null $nomor
 * @property int|null $jumlahberkas
 * @property int|null $idpegawai
 * @property int|null $idjabatanbaru
 */
class Naikjabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'naikjabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jumlahberkas', 'idpegawai', 'idjabatanbaru'], 'integer'],
            [['nomor'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor' => 'Nomor',
            'jumlahberkas' => 'Jumlah berkas',
            'idpegawai' => 'Pegawai',
            'idjabatanbaru' => 'Jabatan Baru',
        ];
    }
    
    public function getPegawai() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpegawai']);
    }
    
    public function getJabatanbaru(){
        return $this->hasOne(Jabatan::class, ['id'=>'idjabatanbaru']);
    }
}
