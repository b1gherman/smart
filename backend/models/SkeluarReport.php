<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_report".
 *
 *
 */
class SkeluarReport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $tanggal;

    // public static function tableName()
    // {
    //     return 'skeluar_pengumuman';
    // }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tahun',
        ];
    }
}
