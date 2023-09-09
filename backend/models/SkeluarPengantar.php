<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_pengantar".
 *
 * @property int $id
 * @property string|null $nomor
 * @property int|null $idpengirim
 * @property string|null $tempat
 * @property string|null $tanggal
 * @property string|null $kepada
 * @property string|null $isi
 * @property string|null $status
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property Pegawai $idpengirim0
 */
class SkeluarPengantar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skeluar_pengantar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpengirim', 'iduser'], 'integer'],
            [['tanggal', 'create_at', 'update_at'], 'safe'],
            [['kepada', 'isi', 'status'], 'string'],
            [['nomor', 'file_upload'], 'string', 'max' => 100],
            [['tempat'], 'string', 'max' => 200],
            [['idpengirim'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['idpengirim' => 'id']],
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
            'idpengirim' => 'Pengirim',
            'tempat' => 'Tempat',
            'tanggal' => 'Tanggal',
            'kepada' => 'Kepada',
            'isi' => 'Isi Surat Pengantar',
            'status' => 'Status',
            'file_upload' => 'File Upload',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[Idpengirim0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdpengirim0()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'idpengirim']);
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
