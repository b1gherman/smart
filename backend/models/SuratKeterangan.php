<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "surat_keterangan".
 *
 * @property int $id
 * @property string|null $kode
 * @property int|null $idunit
 * @property int|null $idttd
 * @property int|null $idterangkan
 * @property string|null $tanggal
 * @property string|null $isi
 * @property string|null $idtembusan
 * @property string|null $create_at
 * @property int|null $create_by
 * @property string|null $update_at
 * @property int|null $update_by
 */
class SuratKeterangan extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'surat_keterangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['kode', 'isi'], 'string'],
            [['idunit', 'idttd', 'idterangkan', 'create_by', 'update_by'], 'integer'],
            [['tanggal', 'create_at', 'update_at','idtembusan'], 'safe'],
//            [['idtembusan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'idunit' => 'Idunit',
            'idttd' => 'Idttd',
            'idterangkan' => 'Idterangkan',
            'tanggal' => 'Tanggal',
            'isi' => 'Isi',
            'idtembusan' => 'Idtembusan',
            'create_at' => 'Create At',
            'create_by' => 'Create By',
            'update_at' => 'Update At',
            'update_by' => 'Update By',
        ];
    }

    public function getUnit() {
        return $this->hasOne(Unit::class, ['id' => 'idunit']);
    }

    public function getTtd() {
        return $this->hasOne(Pegawai::class, ['id' => 'idttd']);
    }

    public function getTerangkan() {
        return $this->hasOne(Pegawai::class, ['id' => 'idttd']);
    }

    public function getTembusan() {
        $hasil = [];
        $ids = json_decode($this->idtembusan, true);
        $c = 0;
        foreach ($ids as $id) {
            $c++;
            $j = Jabatan::findOne($id);
            $hasil[] = $j->jabatan;
        }
        return $hasil;
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            // Place your custom code here
            $this->idtembusan = json_encode($this->idtembusan);
            if ($this->isNewRecord) {
                $this->create_by = \Yii::$app->user->id;
                $this->create_at = new \yii\db\Expression('NOW()');
                $this->update_by = \Yii::$app->user->id;
                $this->update_at = new \yii\db\Expression('NOW()');
            } else {
                $this->update_by = \Yii::$app->user->id;
                $this->update_at = new \yii\db\Expression('NOW()');
            }
            return true;
        } else {
            return false;
        }
    }
}
