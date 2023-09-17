<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_tugas".
 *
 * @property int $id
 * @property string|null $nomor
 * @property int|null $idpemberi
 * @property string|null $idpenerima
 * @property string|null $tugas
 * @property string|null $tanggal_berangkat
 * @property string|null $tanggal_haruskembali
 * @property string|null $selama
 * @property string|null $lokasi
 * @property string|null $sumber_dana
 * @property string|null $keterangan
 * @property string|null $tempat
 * @property string|null $tanggal
 * @property int|null $idtemplate
 * @property string|null $status
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property Pegawai $idpemberi0
 * @property Template $idtemplate0
 */
class SkeluarTugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skeluar_tugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpemberi', 'iduser'], 'integer'],
            [['tugas', 'keterangan', 'status'], 'string'],
            [['idpenerima','tanggal_berangkat','tanggal_haruskembali','tanggal', 'create_at', 'update_at'], 'safe'],
            [['nomor', 'file_upload'], 'string', 'max' => 100],
            [['selama'], 'string', 'max' => 50],
            [['lokasi'], 'string', 'max' => 500],
            [['tempat','sumber_dana'], 'string', 'max' => 200],
            [['idpemberi'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['idpemberi' => 'id']],
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
            'idpemberi' => 'Pemberi Tugas',
            'idpenerima' => 'Penerima Tugas',
            'tugas' => 'Tugas',
            'tanggal_berangkat' => 'Tanggal Berangkat',
            'tanggal_haruskembali' => 'Tanggal Harus Kembali',
            'selama' => 'Selama',
            'lokasi' => 'Lokasi',
            'sumber_dana' => 'Sumber Dana',
            'keterangan' => 'Keterangan',
            'tempat' => 'Tempat Surat Dikeluarkan',
            'tanggal' => 'Tanggal Surat',
            'idtemplate' => 'Template',
            'status' => 'Status',
            'file_upload' => 'File Upload',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[Idpemberi0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdpemberi0()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'idpemberi']);
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
            $this->idpenerima = json_encode($this->idpenerima);
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
