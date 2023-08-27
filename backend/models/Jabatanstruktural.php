<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jabatanstruktural".
 *
 * @property int $id
 * @property int|null $idjabatan
 * @property int|null $idpegawai
 * @property int|null $urutan
 * @property int|null $status
 */
class Jabatanstruktural extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'jabatanstruktural';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['idjabatan', 'idpegawai', 'status','urutan'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'idjabatan' => 'Jabatan',
            'idpegawai' => 'Pegawai',
            'urutan' => 'Urutan',
            'status' => 'Status'
        ];
    }
    
    public function getJabatan() {
        return $this->hasOne(Jabatan::class, ['id'=>'idjabatan']);
    }
    
    public function getPegawai() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpegawai']);
    }

}
