<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "diklat".
 *
 * @property int $id
 * @property int|null $idpegawai
 * @property string $namadiklat
 * @property int|null $tahun
 * @property int|null $jumlahjam
 * @property int|null $status
 */
class Diklat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $nama;
    public static function tableName()
    {
        return 'diklat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpegawai', 'tahun', 'jumlahjam','status'], 'integer'],
            [['namadiklat'], 'required'],
            [['namadiklat'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idpegawai' => 'Idpegawai',
            'namadiklat' => 'Nama Diklat',
            'tahun' => 'Tahun',
            'jumlahjam' => 'Jumlah Jam',
            'status' =>'Status'
        ];
    }
}
