<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "statusanak".
 *
 * @property int $id
 * @property string|null $status
 */
class Statusanak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statusanak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status Anak',
        ];
    }
}
