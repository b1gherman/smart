<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "naikpns".
 *
 * @property int $id
 * @property string|null $nomor
 * @property int|null $jumlahberkas
 * @property int|null $idpegawai
 * @property string $create_at
 * @property string $update_at
 */
class Naikpns extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'naikpns';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jumlahberkas', 'idpegawai'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['nomor'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor' => 'Nomor',
            'jumlahberkas' => 'Jumlah berkas',
            'idpegawai' => 'Pegawai',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
    
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            // Place your custom code here
            if ($this->isNewRecord) {
                $this->create_at = new \yii\db\Expression('NOW()');
                $this->update_at = new \yii\db\Expression('NOW()');
            } else {
                $this->update_at = new \yii\db\Expression('NOW()');
            }
            return true;
        } else {
            return false;
        }
    }
    
    public function getPegawai() {
        return $this->hasOne(Pegawai::class, ['id'=>'idpegawai']);
    }
}
