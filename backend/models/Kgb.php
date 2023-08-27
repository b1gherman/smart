<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kgb".
 *
 * @property int $id
 * @property string|null $nomor
 * @property string|null $lampiran
 * @property int|null $idpegawai
 * @property int|null $idsklama
 * @property float|null $gapokbaru
 * @property int|null $masakerjabarutahun
 * @property int|null $masakerjabarubulan
 * @property int|null $golonganbaru
 * @property string|null $tanggalbaru
 * @property int|null $ttd1
 * @property string|null $tembusan
 * @property string $create_at
 * @property string $update_at
 */
class Kgb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kgb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpegawai', 'idsklama', 'masakerjabarutahun', 'masakerjabarubulan', 'golonganbaru', 'ttd1'], 'integer'],
            [['gapokbaru'], 'number'],
            [['tanggalbaru', 'create_at', 'update_at'], 'safe'],
            [['tembusan'], 'string'],
            [['nomor'], 'string', 'max' => 60],
            [['lampiran'], 'string', 'max' => 20],
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
            'lampiran' => 'Lampiran',
            'idpegawai' => 'Idpegawai',
            'idsklama' => 'Idsklama',
            'gapokbaru' => 'Gapokbaru',
            'masakerjabarutahun' => 'Masakerjabarutahun',
            'masakerjabarubulan' => 'Masakerjabarubulan',
            'golonganbaru' => 'Golonganbaru',
            'tanggalbaru' => 'Tanggalbaru',
            'ttd1' => 'Ttd1',
            'tembusan' => 'Tembusan',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
    
    public function getPegawai() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpegawai']);
    }
    
    public function getSklama() {
        return $this->hasOne(Sk::class, ['id'=>'idsklama']);
    }
    
    public function getGolbaru() {
        return $this->hasOne(Golongan::class, ['id'=>'golonganbaru']);
    }
    
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            // Place your custom code here
            if ($this->isNewRecord) {
                //$this->iduser = Yii::$app->user->Id;
                $this->create_at = new \yii\db\Expression('NOW()');
                $this->update_at = new \yii\db\Expression('NOW()');
            } else {
                $this->update_at = new \yii\db\Expression('NOW()');
            }
            return true;
        } else {
            return false;
        }
    }
}
