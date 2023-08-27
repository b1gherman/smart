<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_undanganinternal".
 *
 * @property int $id
 * @property string|null $nomor
 * @property string|null $sifat
 * @property string|null $lampiran
 * @property string|null $hal
 * @property string|null $tempat
 * @property string|null $tanggal
 * @property string|null $kepada
 * @property string|null $isi
 * @property int|null $idttd
 * @property string|null $tembusan
 * @property string|null $status
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property Jabatan $idttd0
 */
class SkeluarUndanganinternal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skeluar_undanganinternal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'create_at', 'update_at'], 'safe'],
            [['kepada', 'isi', 'tembusan', 'status'], 'string'],
            [['idttd', 'iduser'], 'integer'],
            [['nomor', 'file_upload'], 'string', 'max' => 100],
            [['sifat', 'lampiran', 'hal', 'tempat'], 'string', 'max' => 200],
            [['idttd'], 'exist', 'skipOnError' => true, 'targetClass' => Jabatan::className(), 'targetAttribute' => ['idttd' => 'id']],
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
            'sifat' => 'Sifat',
            'lampiran' => 'Lampiran',
            'hal' => 'Hal',
            'tempat' => 'Tempat',
            'tanggal' => 'Tanggal',
            'kepada' => 'Kepada',
            'isi' => 'Isi Undangan Internal',
            'idttd' => 'Ttd',
            'tembusan' => 'Tembusan',
            'status' => 'Status',
            'file_upload' => 'File Upload',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[Idttd0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdttd0()
    {
        return $this->hasOne(Jabatan::className(), ['id' => 'idttd']);
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
