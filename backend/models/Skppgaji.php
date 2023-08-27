<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skppgaji".
 *
 * @property int $id
 * @property int $id_skpp
 * @property int $id_komponengaji
 * @property float $jumlah
 *
 * @property Komponengaji $komponengaji
 * @property Skpp $skpp
 */
class Skppgaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $nomorskpp;

    public static function tableName()
    {
        return 'skppgaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_skpp', 'id_komponengaji', 'jumlah'], 'required'],
            [['id_skpp', 'id_komponengaji'], 'integer'],
            [['jumlah'], 'number'],
            [['id_komponengaji'], 'exist', 'skipOnError' => true, 'targetClass' => Komponengaji::className(), 'targetAttribute' => ['id_komponengaji' => 'id']],
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
    public function getSkpp()
    {
        return $this->hasOne(Skpp::className(), ['id' => 'id_skpp']);
    }
}
