<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_spd".
 *
 * @property int $id
 * @property string|null $nomor
 * @property int|null $idppk
 * @property int|null $idppd
 * @property string|null $tingkat_biaya
 * @property string|null $maksud
 * @property string|null $alat_angkut
 * @property int|null $idsurattugas
 * @property string|null $tempat_berangkat
 * @property string|null $tujuan
 * @property int|null $lama
 * @property string|null $tgl_berangkat
 * @property string|null $tgl_kembali
 * @property int|null $idanggaran_instansi
 * @property string|null $anggaran_akun
 * @property string|null $keterangan_lain
 * @property string|null $tempat
 * @property string|null $tanggal
 * @property int|null $idtemplate
 * @property string|null $status
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property Instansi $idanggaranInstansi
 * @property Pegawai $idppd0
 * @property Pegawai $idppk0
 * @property SkeluarTugas $idskeluartugas0
 * @property Template $idtemplate0
 */
class SkeluarSpd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skeluar_spd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idppk', 'idppd','idsurattugas','idtemplate', 'lama', 'idanggaran_instansi', 'iduser'], 'integer'],
            [['tgl_berangkat', 'tgl_kembali', 'tanggal', 'create_at', 'update_at'], 'safe'],
            [['alat_angkut','status'], 'string'],
            [['nomor', 'anggaran_akun', 'file_upload'], 'string', 'max' => 100],
            [['tingkat_biaya'], 'string', 'max' => 1],
            [['maksud', 'keterangan_lain'], 'string', 'max' => 500],
            [['tempat_berangkat', 'tujuan', 'tempat'], 'string', 'max' => 200],
            [['idanggaran_instansi'], 'exist', 'skipOnError' => true, 'targetClass' => Instansi::className(), 'targetAttribute' => ['idanggaran_instansi' => 'id']],
            [['idppd'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['idppd' => 'id']],
            [['idppk'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['idppk' => 'id']],
            [['idsurattugas'], 'exist', 'skipOnError' => true, 'targetClass' => SkeluarTugas::className(), 'targetAttribute' => ['idsurattugas' => 'id']],
            [['idtemplate'], 'exist', 'skipOnError' => true, 'targetClass' => Template::className(), 'targetAttribute' => ['idtemplate' => 'id']],
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
            'idppk' => 'Pejabat Pembuat Komitmen',
            'idppd' => 'Pelaksana Perjalanan Dinas',
            'tingkat_biaya' => 'Tingkat Biaya Perjalanan Dinas',
            'maksud' => 'Maksud Perjalanan Dinas',
            'alat_angkut' => 'Alat angkut yang dipergunakan',
            'idsurattugas' => 'Surat Tugas Nomor',
            'tempat_berangkat' => 'Tempat Berangkat',
            'tujuan' => 'Tempat Tujuan',
            'lama' => 'Lama Perjalanan Dinas',
            'tgl_berangkat' => 'Tanggal Berangkat',
            'tgl_kembali' => 'Tanggal Harus Kembali',
            'idanggaran_instansi' => 'Instansi',
            'anggaran_akun' => 'Akun',
            'keterangan_lain' => 'Keterangan Lain-Lain',
            'tempat' => 'Dikeluarkan di',
            'tanggal' => 'Tanggal',
            'idtemplate' => 'Template',
            'status' => 'Status',
            'file_upload' => 'File Upload',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[IdanggaranInstansi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdanggaranInstansi()
    {
        return $this->hasOne(Instansi::className(), ['id' => 'idanggaran_instansi']);
    }

    /**
     * Gets query for [[Idppd0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdppd0()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'idppd']);
    }

    /**
     * Gets query for [[Idppk0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdppk0()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'idppk']);
    }

    /**
     * Gets query for [[Idsurattugas0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdsurattugas0()
    {
        return $this->hasOne(SkeluarTugas::className(), ['id' => 'idsurattugas']);
    }

    /**
     * Gets query for [[Idtemplate0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdtemplate0()
    {
        return $this->hasOne(Template::className(), ['id' => 'idtemplate']);
    }


    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            // Place your custom code here
            if ($this->isNewRecord) {
                $this->iduser = Yii::$app->user->Id;
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
