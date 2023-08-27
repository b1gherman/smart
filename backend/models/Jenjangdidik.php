<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jenjangdidik".
 *
 * @property int $id
 * @property string $jenjang
 *
 * @property Pegawai[] $pegawais
 */
class Jenjangdidik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenjangdidik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenjang'], 'required'],
            [['jenjang'], 'string', 'max' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenjang' => 'Jenjang',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::className(), ['id_jenjangdidik' => 'id']);
    }
}
