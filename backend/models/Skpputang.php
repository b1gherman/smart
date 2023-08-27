<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skpputang".
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
class Skpputang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $nomorskpp;

    public static function tableName()
    {
        return 'skpputang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_skpp', 'uraianpotongan', 'jumlah', 'potongan', 'akunpenerimaan'], 'required'],
            [['id_skpp'], 'integer'],
            [['jumlah', 'potongan'], 'number'],
            [['uraianpotongan'], 'string', 'max' => 200],
            [['akunpenerimaan'], 'string', 'max' => 50],
            [['id_skpp'], 'exist', 'skipOnError' => true, 'targetClass' => Skpp::className(), 'targetAttribute' => ['id_skpp' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_skpp' => 'Id Skpp',
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
    public function getSkpp()
    {
        return $this->hasOne(Skpp::className(), ['id' => 'id_skpp']);
    }
}
