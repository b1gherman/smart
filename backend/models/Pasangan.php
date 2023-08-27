<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pasangan".
 *
 * @property int $id
 * @property int|null $idpegawai
 * @property string|null $nama
 * @property string|null $tgllahir
 * @property string|null $tglperkawinan
 * @property string|null $tglpisah
 * @property int|null $idpekerjaan
 * @property float|null $penghasilan
 * @property int|null $aktif
 */
class Pasangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $namap;
    public static function tableName()
    {
        return 'pasangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpegawai', 'idpekerjaan', 'aktif'], 'integer'],
            [['tgllahir', 'tglperkawinan', 'tglpisah'], 'safe'],
            [['penghasilan'], 'number'],
            [['nama'], 'string', 'max' => 50],
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
            'nama' => 'Nama',
            'tgllahir' => 'Tgllahir',
            'tglperkawinan' => 'Tglperkawinan',
            'tglpisah' => 'Tglpisah',
            'idpekerjaan' => 'Idpekerjaan',
            'penghasilan' => 'Penghasilan',
            'aktif' => 'Aktif',
        ];
    }
    
    public function getPekerjaan() {
        return $this->hasOne(Pekerjaan::className(), ['id'=>'idpekerjaan']);
    }
}
