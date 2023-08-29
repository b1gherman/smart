<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_penerimatugas".
 *
 * @property int $id
 * @property int|null $idtugas
 * @property int|null $idpenerima
 * @property string|null $keterangan
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property Pegawai $idpenerima0
 * @property SkeluarTugas $idtugas0
 */
class SkeluarPenerimatugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $tugas;
    public static function tableName()
    {
        return 'skeluar_penerimatugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idtugas', 'idpenerima', 'iduser'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['tugas'], 'string'],
            [['keterangan'], 'string', 'max' => 500],
            [['idpenerima'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['idpenerima' => 'id']],
            [['idtugas'], 'exist', 'skipOnError' => true, 'targetClass' => SkeluarTugas::className(), 'targetAttribute' => ['idtugas' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idtugas' => 'Idtugas',
            'idpenerima' => 'Penerima Tugas',
            'keterangan' => 'Keterangan',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[Idpenerima0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdpenerima0()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'idpenerima']);
    }

    /**
     * Gets query for [[Idtugas0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdtugas0()
    {
        return $this->hasOne(SkeluarTugas::className(), ['id' => 'idtugas']);
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
