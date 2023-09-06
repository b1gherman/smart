<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jabatanpegawai".
 *
 * @property int $id
 * @property int|null $idpegawai
 * @property int|null $idjabatan
 * @property string|null $esl
 * @property string|null $tmt
 */
class Jabatanpegawai extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public $nama;

    public static function tableName() {
        return 'jabatanpegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['idpegawai', 'idjabatan', 'status'], 'integer'],
            [['tmt'], 'safe'],
            [['esl'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'idpegawai' => 'Idpegawai',
            'idjabatan' => 'Jabatan',
            'esl' => 'ESL',
            'tmt' => 'TMT',
            'status' => 'Status',
        ];
    }

    public function getJabatan() {
        return $this->hasOne(Jabatan::className(), ['id' => 'idjabatan']);
    }

    public function getPegawai() {
        return $this->hasOne(Pegawai::className(), ['id' => 'idpegawai']);
    }

}
