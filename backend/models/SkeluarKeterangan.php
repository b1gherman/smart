<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_keterangan".
 *
 * @property int $id
 * @property string|null $nomor
 * @property string|null $namasurat
 * @property int|null $idpemberi
 * @property string|null $hal
 * @property int|null $idpenerima
 * @property string|null $isi
 * @property string|null $tempat
 * @property string|null $tanggal
 * @property string|null $status
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property Pegawai $idpemberi0
 * @property Pegawai $idpenerima0
 */
class SkeluarKeterangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skeluar_keterangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpemberi', 'idpenerima', 'iduser'], 'integer'],
            [['hal', 'isi', 'status'], 'string'],
            [['tanggal', 'create_at', 'update_at'], 'safe'],
            [['nomor', 'file_upload'], 'string', 'max' => 100],
            [['namasurat', 'tempat'], 'string', 'max' => 200],
            [['idpemberi'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['idpemberi' => 'id']],
            [['idpenerima'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['idpenerima' => 'id']],
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
            'namasurat' => 'Nama Surat',
            'idpemberi' => 'Pemberi',
            'hal' => 'Hal',
            'idpenerima' => 'Penerima',
            'isi' => 'Isi Keterangan',
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

    /**
     * Gets query for [[Idpenerima0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdpenerima0()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'idpenerima']);
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
