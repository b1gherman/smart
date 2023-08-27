<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Penyampaianskpp".
 *
 * @property int $id
 * @property string $nomor_surat
 * @property string $sifat
 * @property string $lampiran
 * @property string $hal
 * @property string $tanggal_surat
 * @property string $kepada
 * @property int $id_pegawai
 * @property int $id_pegawai_kepala
 * @property string|null $create_at
 * @property string|null $update_at
 * @property int|null $iduser
 * 
 * @property Pegawai $pegawai
 * @property Pegawai $pegawaiKepala
 */
class Penyampaianskpp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penyampaianskpp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor_surat', 'sifat', 'lampiran', 'hal','id_jenisskpp', 'tanggal_surat', 'kepada', 'id_pegawai', 'id_pegawai_kepala'], 'required'],
            [['hal', 'kepada'], 'string'],
            [['tanggal_surat', 'create_at', 'update_at'], 'safe'],
            [['id_jenisskpp','id_pegawai', 'id_pegawai_kepala', 'iduser'], 'integer'],
            [['nomor_surat', 'sifat'], 'string', 'max' => 50],
            [['lampiran'], 'string', 'max' => 20],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai' => 'id']],
            [['id_pegawai_kepala'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai_kepala' => 'id']],
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
            'id_jenisskpp' => 'Id Jenis SKPP',
            'tanggal_surat' => 'Tanggal Surat',
            'kepada' => 'Kepada',
            'id_pegawai' => 'Id Pegawai',
            'id_pegawai_kepala' => 'Id Pegawai Kepala',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[Jenisskpp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisskpp()
    {
        return $this->hasOne(Jenisskpp::className(), ['id' => 'id_jenisskpp']);
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
     * Gets query for [[PegawaiKepala]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawaiKepala()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'id_pegawai_kepala']);
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
