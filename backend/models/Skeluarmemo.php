<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skeluar_memo".
 *
 * @property int $id
 * @property string|null $nomor
 * @property int|null $idkepada
 * @property int|null $iddari
 * @property string|null $hal
 * @property string|null $tanggal
 * @property string|null $isi
 * @property int|null $idttd
 * @property string|null $tembusan
 * @property string|null $status
 * @property string|null $file_upload
 * @property string $create_at
 * @property string $update_at
 * @property int|null $iduser
 *
 * @property Jabatan $iddari0
 * @property Jabatan $idkepada0
 * @property Jabatan $idttd0
 */
class Skeluarmemo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skeluar_memo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idkepada', 'iddari', 'idttd', 'iduser'], 'integer'],
            [['tanggal', 'create_at', 'update_at'], 'safe'],
            [['isi', 'tembusan', 'status', 'file_upload'], 'string'],
            [['nomor'], 'string', 'max' => 100],
            [['hal'], 'string', 'max' => 200],
            [['iddari'], 'exist', 'skipOnError' => true, 'targetClass' => Jabatan::className(), 'targetAttribute' => ['iddari' => 'id']],
            [['idkepada'], 'exist', 'skipOnError' => true, 'targetClass' => Jabatan::className(), 'targetAttribute' => ['idkepada' => 'id']],
            [['idttd'], 'exist', 'skipOnError' => true, 'targetClass' => Jabatan::className(), 'targetAttribute' => ['idttd' => 'id']],
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
            'idkepada' => 'Kepada',
            'iddari' => 'Dari',
            'hal' => 'Hal',
            'tanggal' => 'Tanggal Memo',
            'isi' => 'Isi Memo',
            'idttd' => 'Ttd',
            'tembusan' => 'Tembusan',
            'status' => 'Status',
            'file_upload' => 'File Upload',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
        ];
    }

    /**
     * Gets query for [[Iddari0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIddari0()
    {
        return $this->hasOne(Jabatan::className(), ['id' => 'iddari']);
    }

    /**
     * Gets query for [[Idkepada0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdkepada0()
    {
        return $this->hasOne(Jabatan::className(), ['id' => 'idkepada']);
    }

    /**
     * Gets query for [[Idttd0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdttd0()
    {
        return $this->hasOne(Jabatan::className(), ['id' => 'idttd']);
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
