<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "template".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $file
 */
class Template extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'string', 'max' => 50],
            [['file'],'file','skipOnEmpty'=>TRUE,'extensions'=>'docx']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'file' => 'File',
        ];
    }
}
