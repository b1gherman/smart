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
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 */
class SmasukDisposisi extends \yii\db\ActiveRecord
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
            [['hal','catatan'], 'string'],
            [['iduser'], 'integer'],
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
            'nomor' => 'Nomor',
            'tanggal' => 'Tanggal Surat',
            'asal_surat' => 'Asal Surat',
            'hal' => 'Hal',
            'idditeruskan' => 'Idditeruskan',
            'idketdisposisi' => 'Idketdisposisi',
            'idpildisposisi' => 'Idpildisposisi',
            'catatan' => 'Catatan Khusus',
            'file_upload' => 'File Upload',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    public function getDiteruskan() {
        $hasil = [];
        $idterus = json_decode($this->idditeruskan, true);
        $c = 0;
        foreach ($idterus as $id) {
            $c++;
            $j = Jabatan::findOne($id);
            // echo '<pre>';
            // print_r($j->namajabatan);
            // exit;
            $hasil[] = $j->namajabatan;
        }
        return $hasil;
    }

    public function getDataketdisposisi() {
        $hasilketdis = [];
        $idket = json_decode($this->idketdisposisi, true);
        $d = 0;
        foreach ($idket as $idk) {
            $d++;
            $ket = KetDisposisi::findOne($idk);
            $hasilketdis[] = $ket->keterangan_disposisi;
        }
        return $hasilketdis;
    }

    public function getDatapildisposisi() {
        $hasilpildis = [];
        $idpil = json_decode($this->idpildisposisi, true);
        foreach ($idpil as $idp) {
            $pil = PilihanDisposisi::findOne($idp);
            $hasilpildis[] = $pil->pil_disposisi;
        }
        return $hasilpildis;
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            // Place your custom code here
            $this->idditeruskan = json_encode($this->idditeruskan);
            $this->idketdisposisi = json_encode($this->idketdisposisi);
            $this->idpildisposisi = json_encode($this->idpildisposisi);
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
