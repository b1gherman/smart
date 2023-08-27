<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cuti".
 *
 * @property int $id
 * @property string $nomor
 * @property int $id_pegawai
 * @property int $id_jeniscuti
 * @property string $alasan
 * @property string $tglmulaicuti
 * @property string $tglakhircuti
 * @property int $lama
 * @property string $catatancuti
 * @property string $alamatselamacuti
 * @property string $telpon
 * @property string $tanggal_surat
 * @property string $tembusan
 * @property string|null $create_at
 * @property string|null $update_at
 * @property int|null $iduser
 * @property int|null $status
 * @property int|null $status1
 * @property Pegawai $pegawai
 * @property Jeniscuti $jeniscuti
 */
class Cuti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor', 'id_pegawai', 'id_jeniscuti', 'alasan', 'tglmulaicuti', 'tglakhircuti', 'catatancuti', 'alamatselamacuti', 'telpon', 'tanggal_surat', 'tembusan'], 'required'],
            [['id_pegawai', 'id_jeniscuti', 'iduser', 'lama','ttd1','ttd2'], 'integer'],
            [['alasan', 'catatancuti', 'tembusan','status','status1'], 'string'],
            [['tglmulaicuti', 'tglakhircuti', 'tanggal_surat', 'create_at', 'update_at'], 'safe'],
            [['nomor'], 'string', 'max' => 50],
            [['alamatselamacuti'], 'string', 'max' => 200],
            [['telpon'], 'string', 'max' => 12],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai' => 'id']],
            [['id_jeniscuti'], 'exist', 'skipOnError' => true, 'targetClass' => Jeniscuti::className(), 'targetAttribute' => ['id_jeniscuti' => 'id']],
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
            'id_pegawai' => 'Nama Pegawai',
            'id_jeniscuti' => 'Jenis Cuti',
            'alasan' => 'Alasan Cuti',
            'tglmulaicuti' => 'Tanggal Mulai Cuti',
            'tglakhircuti' => 'Tanggal Akhir Cuti',
            'lama' => 'Lama',
            'catatancuti' => 'Catatan Cuti',
            'alamatselamacuti' => 'Alamat Selama Cuti',
            'telpon' => 'Telpon',
            'tanggal_surat' => 'Tanggal Surat',
            'tembusan' => 'Tembusan',
            'status' => 'Atasan Langsung',
            'status1' => 'Pejabat',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
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

    /**
     * Gets query for [[Jeniscuti]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJeniscuti()
    {
        return $this->hasOne(Jeniscuti::className(), ['id' => 'id_jeniscuti']);
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
