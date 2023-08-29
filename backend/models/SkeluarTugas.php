<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_tugas".
 *
 * @property int $id
 * @property string|null $nomor
 * @property int|null $idpemberi
 * @property string|null $penerima
 * @property string|null $tugas
 * @property string|null $tanggal_tugas
 * @property string|null $selama
 * @property string|null $lokasi
 * @property string|null $keterangan
 * @property string|null $tempat
 * @property string|null $tanggal
 * @property string|null $status
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property Pegawai $idpemberi0
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
            [['penerima', 'tugas', 'keterangan', 'status'], 'string'],
            [['tanggal', 'create_at', 'update_at'], 'safe'],
            [['nomor', 'file_upload'], 'string', 'max' => 100],
            [['tanggal_tugas', 'selama'], 'string', 'max' => 50],
            [['lokasi'], 'string', 'max' => 500],
            [['tempat'], 'string', 'max' => 200],
            [['idpemberi'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['idpemberi' => 'id']],
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
            'idpemberi' => 'Pemberi',
            'penerima' => 'Penerima',
            'tugas' => 'Tugas',
            'tanggal_tugas' => 'Tanggal Tugas',
            'selama' => 'Selama',
            'lokasi' => 'Lokasi',
            'keterangan' => 'Keterangan',
            'tempat' => 'Tempat',
            'tanggal' => 'Tanggal',
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
