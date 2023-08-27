<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anakpegawai".
 *
 * @property int $id
 * @property int $id_pegawai
 * @property string $namaanak
 * @property int $idstatusanak
 * @property string $tgl_lahir
 * @property int $id_pekerjaan
 *
 * @property Pegawai $pegawai
 */
class Anakpegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $namapegawai;
    public static function tableName()
    {
        return 'anakpegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'namaanak', 'idstatusanak', 'tgl_lahir', 'id_pekerjaan'], 'required'],
            [['id_pegawai', 'idstatusanak', 'id_pekerjaan'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['namaanak'], 'string', 'max' => 100],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pegawai' => 'Id Pegawai',
            'namaanak' => 'Nama Anak',
            'idstatusanak' => 'Status Anak',
            'tgl_lahir' => 'Tgl Lahir',
            'id_pekerjaan' => 'Pekerjaan',
        ];
    }

    /**
     * Gets query for [[Pegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'id_pegawai']);
    }
    
    public function getStatusanak() {
        return $this->hasOne(Statusanak::className(), ['id' => 'idstatusanak']);
    }
    
    public function getPekerjaan() {
        return $this->hasOne(Pekerjaan::className(), ['id' => 'id_pekerjaan']);
    }
}
