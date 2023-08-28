<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_spd_pengikut".
 *
 * @property int $id
 * @property int|null $idspd
 * @property string|null $nama
 * @property string|null $tanggal_lahir
 * @property string|null $keterangan
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property SkeluarSpd $idspd0
 */
class SkeluarSpdPengikut extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skeluar_spd_pengikut';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idspd', 'iduser'], 'integer'],
            [['tanggal_lahir', 'create_at', 'update_at'], 'safe'],
            [['nama'], 'string', 'max' => 200],
            [['keterangan'], 'string', 'max' => 500],
            [['idspd'], 'exist', 'skipOnError' => true, 'targetClass' => SkeluarSpd::className(), 'targetAttribute' => ['idspd' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idspd' => 'Idspd',
            'nama' => 'Nama',
            'tanggal_lahir' => 'Tanggal Lahir',
            'keterangan' => 'Keterangan',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[Idspd0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdspd0()
    {
        return $this->hasOne(SkeluarSpd::className(), ['id' => 'idspd']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            // Place your custom code here
            if ($this->isNewRecord) {
                $this->iduser = Yii::$app->user->Id;
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
}
