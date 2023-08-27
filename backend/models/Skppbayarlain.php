<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skppbayarlain".
 *
 * @property int $id
 * @property int $id_skpp
 * @property string $keterangan
 * @property string $subketerangan
 *
 * @property Skpp $skpp
 */
class Skppbayarlain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $nomorskpp;

    public static function tableName()
    {
        return 'skppbayarlain';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_skpp', 'keterangan', 'subketerangan'], 'required'],
            [['id_skpp'], 'integer'],
            [['keterangan', 'subketerangan'], 'string', 'max' => 200],
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
            'keterangan' => 'Keterangan',
            'subketerangan' => 'Sub Keterangan',
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
