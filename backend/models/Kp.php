<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kp".
 *
 * @property int $id
 * @property string|null $nomor
 * @property string|null $tanggal
 * @property int|null $idpegawai
 * @property string|null $kerjalain
 * @property float|null $gajilain
 * @property float|null $punyapensiun
 * @property int|null $iduser
 * @property int|null $ttd
 */
class Kp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['idpegawai', 'iduser','ttd'], 'integer'],
            [['gajilain', 'punyapensiun'], 'number'],
            [['nomor'], 'string', 'max' => 60],
            [['kerjalain'], 'string', 'max' => 100],
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
            'tanggal' => 'Tanggal',
            'idpegawai' => 'Idpegawai',
            'kerjalain' => 'Kerjalain',
            'gajilain' => 'Gajilain',
            'punyapensiun' => 'Punyapensiun',
            'iduser' => 'Iduser',
        ];
    }
    
    public function getPegawai() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpegawai']);
    }
}
