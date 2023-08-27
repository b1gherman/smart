<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "instansi".
 *
 * @property int $id
 * @property string $namainstansi
 * @property string $satuanorganisasi
 * @property int $kodesatuan
 *
 * @property Pegawai[] $pegawais
 */
class Instansi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instansi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namainstansi', 'satuanorganisasi', 'kodesatuan'], 'required'],
            [['namainstansi', 'satuanorganisasi'], 'string', 'max' => 200],
            [['kodesatuan'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namainstansi' => 'Nama Instansi',
            'satuanorganisasi' => 'Satuan Organisasi',
            'kodesatuan' => 'Kode Satuan',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::className(), ['id_instansi' => 'id']);
    }
}
