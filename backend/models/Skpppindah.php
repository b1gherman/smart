<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skpppindah".
 *
 * @property int $id
 * @property string $nomorskpp
 * @property string $lampiran
 * @property int $id_pegawai
 * @property int $id_sk
 * @property string $pindah_sebagai
 * @property int $id_jabatan
 * @property int $id_satuankerja
 * @property string $tanggal_surat
 * @property string $jabatan_mengetahui
 * @property string $nama_mengetahui
 * @property string $nip_mengetahui
 * @property string $tembusan
 * @property string|null $create_at
 * @property string|null $update_at
 * @property int|null $iduser
 *
 * @property Jabatan $jabatan
 * @property Pegawai $pegawai
 * @property Skpppindahbayarlain[] $skpppindahbayarlains
 * @property Skpppindahgaji[] $skpppindahgajis
 * @property Skpppindahutang[] $skpppindahutangs
 */
class Skpppindah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skpppindah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomorskpp','lampiran', 'id_pegawai', 'id_sk','pindah_sebagai' ,'id_jabatan', 'id_satuankerja', 'tanggal_surat', 'jabatan_mengetahui', 'nama_mengetahui', 'nip_mengetahui', 'tembusan'], 'required'],
            [['id_pegawai', 'id_sk', 'id_jabatan', 'id_satuankerja', 'iduser'], 'integer'],
            [['tembusan'], 'string'],
            [['tanggal_surat', 'create_at', 'update_at'], 'safe'],
            [['nomorskpp'], 'string', 'max' => 50],
            // [['nomorsk'], 'string', 'max' => 25],
            [['jabatan_mengetahui','lampiran'], 'string', 'max' => 100],
            [['nama_mengetahui'], 'string', 'max' => 100],
            [['nip_mengetahui'], 'string', 'max' => 30],
            [['id_sk'], 'exist', 'skipOnError' => true, 'targetClass' => Sk::className(), 'targetAttribute' => ['id_sk' => 'id']],
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
            'nomorskpp' => 'Nomor SKPP Pindah',
            'lampiran' => 'Lampiran',
            'id_pegawai' => 'Pegawai',
            'id_sk' => 'SK',
            'pindah_sebagai' => 'Dipindahkan Sebagai',
            'id_jabatan' => 'ID Jabatan',
            'id_satuankerja' => 'ID Satuan Kerja',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[Satuankerja]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuankerja()
    {
        return $this->hasOne(Satuankerja::className(), ['id' => 'id_satuankerja']);
    }

    /**
     * Gets query for [[Jabatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJabatan()
    {
        return $this->hasOne(Jabatan::className(), ['id' => 'id_jabatan']);
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
     * Gets query for [[Skpppindahbayarlains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpppindahbayarlains()
    {
        return $this->hasMany(Skpppindahbayarlain::className(), ['id_skpppindah' => 'id']);
    }

    /**
     * Gets query for [[Skpppindahgajis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpppindahgajis()
    {
        return $this->hasMany(Skpppindahgaji::className(), ['id_skpppindah' => 'id']);
    }

    /**
     * Gets query for [[Skpppindahutangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpppindahutangs()
    {
        return $this->hasMany(Skpppindahutang::className(), ['id_skpppindah' => 'id']);
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
