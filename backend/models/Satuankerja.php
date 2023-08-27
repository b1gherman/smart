<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "satuankerja".
 *
 * @property int $id
 * @property int $kodesatuan
 * @property string $namasatuankerja
 */
class Satuankerja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satuankerja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kodesatuan', 'namasatuankerja'], 'required'],
            [['kodesatuan'], 'integer'],
            [['namasatuankerja'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kodesatuan' => 'Kode Satuan',
            'namasatuankerja' => 'Nama Satuan Kerja',
        ];
    }
}
