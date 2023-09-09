<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pilihan_disposisi".
 *
 * @property int $id
 * @property string $pil_disposisi
 * @property string $kelompok
 */
class PilihanDisposisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pilihan_disposisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pil_disposisi'], 'required'],
            [['pil_disposisi'], 'string', 'max' => 100],
            [['kelompok'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pil_disposisi' => 'Pilihan Disposisi',
            'kelompok' => 'Kelompok',
        ];
    }
}
