<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "komponengaji".
 *
 * @property int $id
 * @property string $namakomponen
 * @property string $kelompok
 *
 * @property Skppgaji[] $skppgajis
 */
class Komponengaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'komponengaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namakomponen', 'kelompok'], 'required'],
            [['kelompok'], 'string'],
            [['namakomponen'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namakomponen' => 'Nama Komponen',
            'kelompok' => 'Kelompok',
        ];
    }

    /**
     * Gets query for [[Skppgajis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkppgajis()
    {
        return $this->hasMany(Skppgaji::className(), ['id_komponengaji' => 'id']);
    }
}
