<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skpppindahgaji".
 *
 * @property int $id
 * @property int $id_skpppindah
 * @property int $id_komponengaji
 * @property float $jumlah
 *
 * @property Komponengaji $komponengaji
 * @property Skpppindah $skpppindah
 */
class Skpppindahgaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $nomorskpp;

    public static function tableName()
    {
        return 'skpppindahgaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_skpppindah', 'id_komponengaji', 'jumlah'], 'required'],
            [['id_skpppindah', 'id_komponengaji'], 'integer'],
            [['jumlah'], 'number'],
            [['id_komponengaji'], 'exist', 'skipOnError' => true, 'targetClass' => Komponengaji::className(), 'targetAttribute' => ['id_komponengaji' => 'id']],
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
            'id_komponengaji' => 'Id Komponengaji',
            'jumlah' => 'Jumlah',
        ];
    }

    /**
     * Gets query for [[Komponengaji]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKomponengaji()
    {
        return $this->hasOne(Komponengaji::className(), ['id' => 'id_komponengaji']);
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
