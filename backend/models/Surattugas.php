<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "surattugas".
 *
 * @property int $id
 * @property string|null $nomor
 * @property int|null $idpemberi
 * @property int|null $idpenerima
 * @property string|null $namatugas
 * @property int|null $waktu
 * @property string|null $lokasi
 * @property string|null $daritgl
 * @property string|null $sampaitgl
 * @property string|null $sumberdana
 * @property string $create_at
 * @property string $update_at
 */
class Surattugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surattugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpemberi', 'idpenerima', 'waktu','ttd'], 'integer'],
            [['namatugas', 'lokasi'], 'string'],
            [['daritgl', 'sampaitgl', 'create_at', 'update_at'], 'safe'],
            [['nomor'], 'string', 'max' => 100],
            [['sumberdana'], 'string', 'max' => 10],
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
            'idpemberi' => 'Pemberi Tugas',
            'idpenerima' => 'Penerima Tugas',
            'namatugas' => 'Nama tugas',
            'waktu' => 'Selama',
            'lokasi' => 'Lokasi',
            'daritgl' => 'Dari tanggal',
            'sampaitgl' => 'Sampai tanggal',
            'sumberdana' => 'Sumberdana',
            'ttd' => 'Ditandatangani oleh',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
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
    
    public function getPemberi() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpemberi']);
    }
    
    public function getPenerima() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpenerima']);
    }
}
