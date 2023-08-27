<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "naikpangkat".
 *
 * @property int $id
 * @property string|null $nomor
 * @property int|null $jumlahberkas
 * @property int|null $idpegawai
 * @property int|null $idpangkatbaru
 */
class Naikpangkat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'naikpangkat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jumlahberkas', 'idpegawai', 'idpangkatbaru'], 'integer'],
            [['nomor'], 'string', 'max' => 100],
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
            'jumlahberkas' => 'Jumlahberkas',
            'idpegawai' => 'Pegawai',
            'idpangkatbaru' => 'Pangkat Baru',
        ];
    }
    
    public function getPegawai() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpegawai']);
    }
    
    public function getGolongan() {
        return $this->hasOne(Golongan::class, ['id'=>'idpangkatbaru']);
    }
}
