<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skpp".
 *
 * @property int $id
 * @property string $nomorskpp
 * @property int $id_pegawai
 * @property int $id_jabatan
 * @property int $id_instansi
 * @property string $nomorsk
 * @property string $tglsk
 * @property string $tmtberhenti
 * @property string $tanggal_surat
 * @property string $jabatan_mengetahui
 * @property string $nama_mengetahui
 * @property string $nip_mengetahui
 * @property string $tembusan
 * @property string|null $create_at
 * @property string|null $update_at
 * @property int|null $iduser
 *
 * @property Instansi $instansi
 * @property Jabatan $jabatan
 * @property Pegawai $pegawai
 * @property Skppbayarlain[] $skppbayarlains
 * @property Skppgaji[] $skppgajis
 * @property Skpputang[] $skpputangs
 */
class Skpp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skpp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomorskpp', 'id_pegawai', 'id_sk', 'tmtberhenti', 'tanggal_surat', 'jabatan_mengetahui', 'nama_mengetahui', 'nip_mengetahui', 'tembusan'], 'required'],
            [['id_pegawai', 'id_sk', 'iduser'], 'integer'],
            [['tembusan'], 'string'],
            [['tmtberhenti', 'tanggal_surat', 'create_at', 'update_at'], 'safe'],
            [['nomorskpp'], 'string', 'max' => 50],
            // [['nomorsk'], 'string', 'max' => 25],
            [['jabatan_mengetahui'], 'string', 'max' => 100],
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
            'nomorskpp' => 'Nomor SKPP Pensiun',
            'id_pegawai' => 'Pegawai',
            'id_sk' => 'SK',
            'tmtberhenti' => 'Tmt Berhenti',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
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
     * Gets query for [[Skppbayarlains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkppbayarlains()
    {
        return $this->hasMany(Skppbayarlain::className(), ['id_skpp' => 'id']);
    }

    /**
     * Gets query for [[Skppgajis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkppgajis()
    {
        return $this->hasMany(Skppgaji::className(), ['id_skpp' => 'id']);
    }

    /**
     * Gets query for [[Skpputangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpputangs()
    {
        return $this->hasMany(Skpputang::className(), ['id_skpp' => 'id']);
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
