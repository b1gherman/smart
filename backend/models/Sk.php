<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sk".
 *
 * @property int $id
 * @property string|null $nosk
 * @property string|null $tgl
 * @property string|null $pejabat
 * @property string|null $dokumen
 * @property int $idjenissk
 * @property int $idpegawai
 */
class Sk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $nama;
    public static function tableName()
    {
        return 'sk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idjenissk','idpegawai'],'integer'],
            [['tgl'], 'safe'],
            [['nosk', 'pejabat'], 'string', 'max' => 100],
            ['dokumen', 'file', 'extensions' => ['pdf'], 'maxSize' => 1024 * 1024 * 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nosk' => 'Nosk',
            'tgl' => 'Tgl',
            'pejabat' => 'Pejabat',
            'dokumen' => 'Dokumen',
            'idjenissk' => 'Jenis SK',
            'idpegawai' => 'Pegawai'
        ];
    }
    
    public function getJenissk() {
        return $this->hasOne(Jenissk::class, ['id'=>'idjenissk']);
    }
    
    public function getPegawai() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpegawai']);
    }
    
    public function getRiwayatkerja(){
        return $this->hasOne(Riwayatkerja::class, ['idsk'=>'id']);
    }
}
