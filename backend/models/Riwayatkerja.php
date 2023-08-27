<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "riwayatkerja".
 *
 * @property int $id
 * @property int|null $idpegawai
 * @property int|null $idsk
 * @property string|null $tglmulai
 * @property int|null $golongan
 * @property float|null $gapok
 * @property int|null $status
 * @property int|null $masakerjatahun
 * @property int|null $masakerjabulan
 */
class Riwayatkerja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $namapegawai;
    public static function tableName()
    {
        return 'riwayatkerja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpegawai', 'idsk', 'golongan', 'status','masakerjatahun','masakerjabulan'], 'integer'],
            [['tglmulai'], 'safe'],
            [['gapok'], 'number'],
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
            'idsk' => 'Idsk',
            'tglmulai' => 'Tglmulai',
            'golongan' => 'Golongan',
            'gapok' => 'Gapok',
            'masakerjatahun' => 'Masa Kerja Tahun',
            'masakerjabulan' => 'Masa Kerja Bulan',
            'status' => 'Status',
        ];
    }
    
    public function getSk() {
        return $this->hasOne(Sk::class, ['id' => 'idsk']);
    }
    
    public function getGolongan1() {
        return $this->hasOne(Golongan::class, ['id'=>'golongan']);
    }
}
