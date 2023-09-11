<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_undanganeksternal".
 *
 * @property int $id
 * @property string|null $nomor
 * @property string|null $sifat
 * @property string|null $lampiran
 * @property string|null $hal
 * @property string|null $tempat
 * @property string|null $tanggal
 * @property string|null $kepada
 * @property string|null $di
 * @property string|null $isi
 * @property int|null $idttd
 * @property string|null $tembusan
 * @property int|null $idtemplate
 * @property string|null $status
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property Jabatan $idttd0
 * @property Template $idtemplate0
 */
class SkeluarUndanganeksternal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skeluar_undanganeksternal';
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
            [['di',], 'string', 'max' => 50],
            [['nomor', 'file_upload'], 'string', 'max' => 100],
            [['sifat', 'lampiran', 'hal', 'tempat'], 'string', 'max' => 200],
            [['idttd'], 'exist', 'skipOnError' => true, 'targetClass' => Jabatan::className(), 'targetAttribute' => ['idttd' => 'id']],
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
            'sifat' => 'Sifat',
            'lampiran' => 'Lampiran',
            'hal' => 'Hal',
            'tempat' => 'Tempat Surat Dikeluarkan',
            'tanggal' => 'Tanggal',
            'kepada' => 'Kepada',
            'di' => 'Di',
            'isi' => 'Isi Undangan Eksternal',
            'idttd' => 'Ttd',
            'tembusan' => 'Tembusan',
            'idtemplate' => 'Template',
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
