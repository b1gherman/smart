<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "golonganpegawai".
 *
 * @property int $id
 * @property int|null $idpegawai
 * @property int|null $idgolongan
 * @property string|null $tmt
 * @property int|null $status
 */
class Golonganpegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $nama;
    public static function tableName()
    {
        return 'golonganpegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpegawai', 'idgolongan', 'status'], 'integer'],
            [['tmt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idpegawai' => 'Pegawai',
            'idgolongan' => 'Golongan',
            'tmt' => 'TMT',
            'status' => 'Status',
        ];
    }
    
    public function getGolongan() {
        return $this->hasOne(Golongan::className(), ['id'=>'idgolongan']);
    }
}
