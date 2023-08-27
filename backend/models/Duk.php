<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "duk".
 *
 * @property int $id
 * @property int|null $idpegawai
 * @property int|null $urutan
 */
class Duk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'duk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpegawai', 'urutan','status'], 'integer'],
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
            'urutan' => 'Urutan',
            'status' => 'Status'
        ];
    }
    
    public function getPegawai() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpegawai']);
    }
}
