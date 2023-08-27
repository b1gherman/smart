<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "riwayatpendidikan".
 *
 * @property int $id
 * @property int|null $idpegawai
 * @property string|null $namasekolah
 * @property int|null $idtingkatansekolah
 * @property int|null $idjurusan
 * @property int|null $tahunlulus
 * @property int|null $status
 */
class Riwayatpendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $nama;
    public static function tableName()
    {
        return 'riwayatpendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpegawai', 'idtingkatansekolah', 'idjurusan', 'tahunlulus', 'status'], 'integer'],
            [['namasekolah'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idpegawai' => 'Pegawai',
            'namasekolah' => 'Nama Sekolah',
            'idtingkatansekolah' => 'Tingkatan',
            'idjurusan' => 'Jurusan',
            'tahunlulus' => 'Tahun Lulus',
            'status' => 'Status',
        ];
    }
    
    public function getTingkat() {
        return $this->hasOne(Tingkatansekolah::className(), ['id'=>'idtingkatansekolah']);
    }
    
    public function getJurusan() {
        return $this->hasOne(Jurusan::className(), ['id'=>'idjurusan']);
    }
}
