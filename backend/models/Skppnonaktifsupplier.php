<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skppnonaktifsupplier".
 *
 * @property int $id
 * @property string $nomor_surat
 * @property string $sifat
 * @property string $lampiran
 * @property string $hal
 * @property string $id_jenisskpp
 * @property string $tanggal_surat
 * @property string $kepada
 * @property string $no_dirjen_bendahara
 * @property int $id_instansi
 * @property int $no_register_supplier
 * @property int $id_pegawai
 * @property string $nama_bank
 * @property string $no_rekening
 * @property int $id_sk
 * @property int $id_pegawai_kpa
 * @property string|null $create_at
 * @property string|null $update_at
 * @property int|null $iduser
 *
 * @property Instansi $instansi
 * @property Pegawai $pegawai
 * @property Pegawai $pegawaiKpa
 * @property Sk $sk
 */
class Skppnonaktifsupplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skppnonaktifsupplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor_surat', 'lampiran', 'hal', 'id_jenisskpp', 'tanggal_surat', 'kepada', 'no_dirjen_bendahara', 'id_instansi', 'no_register_supplier', 'id_pegawai', 'nama_bank', 'no_rekening', 'id_sk', 'id_pegawai_kpa'], 'required'],
            [['hal', 'kepada'], 'string'],
            [['tanggal_surat', 'create_at', 'update_at'], 'safe'],
            [['id_jenisskpp','id_instansi', 'no_register_supplier', 'id_pegawai', 'id_sk', 'id_pegawai_kpa', 'iduser'], 'integer'],
            [['nomor_surat','sifat', 'no_dirjen_bendahara'], 'string', 'max' => 50],
            [['lampiran', 'no_rekening'], 'string', 'max' => 20],
            [['nama_bank'], 'string', 'max' => 100],
            [['id_instansi'], 'exist', 'skipOnError' => true, 'targetClass' => Instansi::className(), 'targetAttribute' => ['id_instansi' => 'id']],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai' => 'id']],
            [['id_pegawai_kpa'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai_kpa' => 'id']],
            [['id_sk'], 'exist', 'skipOnError' => true, 'targetClass' => Sk::className(), 'targetAttribute' => ['id_sk' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor_surat' => 'Nomor Surat',
            'sifat' => 'Sifat',
            'lampiran' => 'Lampiran',
            'hal' => 'Hal',
            'id_jenisskpp' => 'id_jenisskpp',
            'tanggal_surat' => 'Tanggal Surat',
            'kepada' => 'Kepada',
            'no_dirjen_bendahara' => 'No Dirjen Bendahara',
            'id_instansi' => 'Nama Supplier',
            'no_register_supplier' => 'No Register Supplier',
            'id_pegawai' => 'Id Pegawai',
            'nama_bank' => 'Nama Bank',
            'no_rekening' => 'No Rekening',
            'id_sk' => 'Id Sk',
            'id_pegawai_kpa' => 'Id Pegawai Kpa',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[jenisskpp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisskpp()
    {
        return $this->hasOne(Jenisskpp::className(), ['id' => 'id_jenisskpp']);
    }

    /**
     * Gets query for [[Instansi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInstansi()
    {
        return $this->hasOne(Instansi::className(), ['id' => 'id_instansi']);
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

    /**
     * Gets query for [[PegawaiKpa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawaiKpa()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'id_pegawai_kpa']);
    }

    /**
     * Gets query for [[Sk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSk()
    {
        return $this->hasOne(Sk::className(), ['id' => 'id_sk']);
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
