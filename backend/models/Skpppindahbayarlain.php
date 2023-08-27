<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skpppindahbayarlain".
 *
 * @property int $id
 * @property int $id_skpppindah
 * @property string $keterangan
 * @property string $subketerangan
 *
 * @property Skpppindah $skpppindah
 */
class Skpppindahbayarlain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $nomorskpp;

    public static function tableName()
    {
        return 'skpppindahbayarlain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_skpppindah', 'keterangan', 'subketerangan'], 'required'],
            [['id_skpppindah'], 'integer'],
            [['keterangan', 'subketerangan'], 'string', 'max' => 200],
            [['id_skpppindah'], 'exist', 'skipOnError' => true, 'targetClass' => Skpppindah::className(), 'targetAttribute' => ['id_skpppindah' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_skpppindah' => 'Id SKPP Pindah',
            'keterangan' => 'Keterangan',
            'subketerangan' => 'Sub Keterangan',
        ];
    }

    /**
     * Gets query for [[Skpp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpppindah()
    {
        return $this->hasOne(Skpppindah::className(), ['id' => 'id_skpppindah']);
    }
}
