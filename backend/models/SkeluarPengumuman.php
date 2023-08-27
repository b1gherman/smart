<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_pengumuman".
 *
 * @property int $id
 * @property string|null $nomor
 * @property int|null $idpembuat
 * @property string|null $tentang
 * @property string|null $isi
 * @property string|null $tempat
 * @property string|null $tanggal
 * @property string|null $status
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property Pegawai $idpembuat0
 */
class SkeluarPengumuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skeluar_pengumuman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpembuat', 'iduser'], 'integer'],
            [['tentang', 'isi', 'status'], 'string'],
            [['tanggal', 'create_at', 'update_at'], 'safe'],
            [['nomor', 'file_upload'], 'string', 'max' => 100],
            [['tempat'], 'string', 'max' => 200],
            [['idpembuat'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['idpembuat' => 'id']],
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
            'idpembuat' => 'Pembuat',
            'tentang' => 'Tentang',
            'isi' => 'Isi Pengumuman',
            'tempat' => 'Ditetapkan di',
            'tanggal' => 'Tanggal',
            'status' => 'Status',
            'file_upload' => 'File Upload',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[Idpembuat0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdpembuat0()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'idpembuat']);
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
