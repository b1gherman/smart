<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ket_disposisi".
 *
 * @property int $id
 * @property string $keterangan_disposisi
 */
class KetDisposisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ket_disposisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keterangan_disposisi'], 'required'],
            [['keterangan_disposisi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keterangan_disposisi' => 'Keterangan Disposisi',
        ];
    }
}
