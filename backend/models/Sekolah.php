<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sekolah".
 *
 * @property int $id
 * @property string $namasekolah
 * @property int $id_tingkatan
 *
 * @property Pegawai[] $pegawais
 * @property Pegawai[] $pegawais0
 * @property Pegawai[] $pegawais1
 * @property Pegawai[] $pegawais2
 * @property Pegawai[] $pegawais3
 * @property Tingkatansekolah $tingkatan
 */
class Sekolah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sekolah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namasekolah', 'id_tingkatan'], 'required'],
            [['id_tingkatan'], 'integer'],
            [['namasekolah'], 'string', 'max' => 200],
            [['id_tingkatan'], 'exist', 'skipOnError' => true, 'targetClass' => Tingkatansekolah::className(), 'targetAttribute' => ['id_tingkatan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namasekolah' => 'Namasekolah',
            'id_tingkatan' => 'Id Tingkatan',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::className(), ['id_sekolahpt' => 'id']);
    }

    /**
     * Gets query for [[Pegawais0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais0()
    {
        return $this->hasMany(Pegawai::className(), ['id_sekolahsd' => 'id']);
    }

    /**
     * Gets query for [[Pegawais1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais1()
    {
        return $this->hasMany(Pegawai::className(), ['id_sekolahsma' => 'id']);
    }

    /**
     * Gets query for [[Pegawais2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais2()
    {
        return $this->hasMany(Pegawai::className(), ['id_sekolahsmp' => 'id']);
    }

    /**
     * Gets query for [[Pegawais3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais3()
    {
        return $this->hasMany(Pegawai::className(), ['id_sekolahtk' => 'id']);
    }

    /**
     * Gets query for [[Tingkatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTingkatan()
    {
        return $this->hasOne(Tingkatansekolah::className(), ['id' => 'id_tingkatan']);
    }
}
