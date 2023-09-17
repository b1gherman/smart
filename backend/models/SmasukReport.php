<?php

namespace backend\models;

use Mpdf\Tag\Pre;
use Yii;

/**
 * This is the model class for table "smasuk_disposisi".
 *
 * @property int $id
 * @property string|null $nomor_agenda
 * @property string|null $tanggal_terima
 * @property string|null $nomor
 * @property string|null $tanggal
 * @property string|null $asal_surat
 * @property string|null $hal
 * @property string|null $idditeruskan
 * @property string|null $idketdisposisi
 * @property string|null $idpildisposisi
 * @property string|null $catatan
 * @property int|null $idtemplate
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 * 
 * @property Template $idtemplate0
 */
class SmasukReport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'smasuk_disposisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_terima', 'tanggal', 'create_at', 'update_at', 'idditeruskan', 'idketdisposisi', 'idpildisposisi'], 'safe'],
            [['hal', 'catatan'], 'string'],
            [['idtemplate', 'iduser'], 'integer'],
            [['nomor_agenda', 'nomor', 'file_upload'], 'string', 'max' => 100],
            [['asal_surat'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor_agenda' => 'Nomor Agenda',
            'tanggal_terima' => 'Tanggal Terima',
            'nomor' => 'Nomor Surat',
            'tanggal' => 'Tahun',
            'asal_surat' => 'Asal Surat',
            'hal' => 'Hal',
            'idditeruskan' => 'Idditeruskan',
            'idketdisposisi' => 'Idketdisposisi',
            'idpildisposisi' => 'Idpildisposisi',
            'catatan' => 'Catatan Khusus',
            'idtemplate' => 'Template',
            'file_upload' => 'File Upload',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
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
        
}
