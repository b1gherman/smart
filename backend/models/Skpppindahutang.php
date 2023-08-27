<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Skpppindahutang".
 *
 * @property int $id
 * @property int $id_skpp
 * @property string $uraianpotongan
 * @property float $jumlah
 * @property float $potongan
 * @property string $akunpenerimaan
 *
 * @property Skpp $skpp
 */
class Skpppindahutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $nomorskpp;

    public static function tableName()
    {
        return 'skpppindahutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_skpppindah', 'uraianpotongan', 'jumlah', 'potongan', 'akunpenerimaan'], 'required'],
            [['id_skpppindah'], 'integer'],
            [['jumlah', 'potongan'], 'number'],
            [['uraianpotongan'], 'string', 'max' => 200],
            [['akunpenerimaan'], 'string', 'max' => 50],
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
            'uraianpotongan' => 'Uraian Potongan',
            'jumlah' => 'Jumlah',
            'potongan' => 'Potongan',
            'akunpenerimaan' => 'Akun Penerimaan',
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
