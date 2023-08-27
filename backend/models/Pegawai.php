<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id
 * @property string $nip
 * @property string $namapegawai
 * @property string $jeniskelamin
 * @property string $statuskepegawaian
 * @property string $no_serikarpeg
 * @property int $npwp
 * @property string $tempatlahir
 * @property string $tgllahir
 * @property string $alamat
 * @property int $hp
 * @property int $id_agama
 * @property int $gajipokok
 * @property string $berkalaakhir
 * @property string $statuskawin
 * @property string $email
 * @property string $catmutasi
 * @property string|null $create_at
 * @property string|null $update_at
 * @property int|null $iduser
 *
 * @property Anakpegawai[] $anakpegawais
 * @property Cuti[] $cutis
 * @property Agama $agama
 * @property string|null $foto
 * @property int $aktif
 */
class Pegawai extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['nip', 'namapegawai', 'jeniskelamin', 'statuskepegawaian', 'no_serikarpeg', 'npwp', 'tempatlahir', 'tgllahir', 'alamat', 'hp', 'id_agama', 'gajipokok', 'berkalaakhir', 'statuskawin', 'email', 'catmutasi'], 'required'],
            [['id_agama', 'gajipokok', 'iduser', 'aktif'], 'integer'],
            [['gajipokok'], 'number'],
            [['jeniskelamin', 'statuskepegawaian', 'statuskawin', 'nip', 'npwp', 'hp'], 'string'],
            [['tgllahir', 'berkalaakhir','tglcpns', 'create_at', 'update_at'], 'safe'],
            [['namapegawai'], 'string', 'max' => 100],
            [['no_serikarpeg'], 'string', 'max' => 10],
            [['tempatlahir', 'email'], 'string', 'max' => 50],
            [['alamat', 'catmutasi'], 'string', 'max' => 200],
            [['foto'], 'string'],
            [['id_agama'], 'exist', 'skipOnError' => true, 'targetClass' => Agama::className(), 'targetAttribute' => ['id_agama' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'namapegawai' => 'Nama Pegawai',
            'jeniskelamin' => 'Jenis kelamin',
            'statuskepegawaian' => 'Status Kepegawaian',
            'no_serikarpeg' => 'No Seri Karpeg',
            'npwp' => 'NPWP',
            'tempatlahir' => 'Tempat Lahir',
            'tgllahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'hp' => 'HP',
            'id_agama' => 'Agama',
            'gajipokok' => 'Gaji Pokok',
            'berkalaakhir' => 'Berkala Akhir',
            'statuskawin' => 'Status Kawin',
            'email' => 'Email',
            'catmutasi' => 'Catatan Mutasi',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'iduser' => 'Iduser',
            'foto' => 'Foto',
            'tglcpns' => 'Tanggal CPNS'
        ];
    }

    /**
     * Gets query for [[Anakpegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnakpegawais() {
        return $this->hasMany(Anakpegawai::className(), ['id_pegawai' => 'id']);
    }

    /**
     * Gets query for [[Cutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCutis() {
        return $this->hasMany(Cuti::className(), ['id_pegawai' => 'id']);
    }

    /**
     * Gets query for [[Agama]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgama() {
        return $this->hasOne(Agama::className(), ['id' => 'id_agama']);
    }

    public function beforeSave($insert) {
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

    public function getImageurl() {
        return \Yii::$app->request->BaseUrl . '/foto/' . $this->foto;
    }

    public function getGolongan() {
        $golpeg = Golonganpegawai::findOne(['idpegawai' => $this->id, 'status' => 1]);
        if ($golpeg) {
            return $golpeg->golongan->kode_gol;
        }
        return '';
    }
    
    public function getGolaktif(){
        return $this->hasOne(Golonganpegawai::class, ['idpegawai'=>'id'])->where(['status'=>1]); 
    }

    public function getPangkat() {
        $golpeg = Golonganpegawai::findOne(['idpegawai' => $this->id, 'status' => 1]);
        if ($golpeg) {
            return $golpeg->golongan->pangkat;
        }
        return '';
    }
   
    public function getJabatan() {
        $golpeg = Jabatanpegawai::findOne(['idpegawai' => $this->id, 'status' => 1]);
        if ($golpeg) {
            return $golpeg->jabatan->namajabatan;
        }
        return '';
    }
    
    public function getJabatanaktif() {
        return $this->hasOne(Jabatanpegawai::class, ['idpegawai'=>'id'])->where(['status'=>1]);
    }
    
    public function getPendidikanaktif() {
        return $this->hasOne(Riwayatpendidikan::class, ['idpegawai'=>'id'])->where(['status'=>1]);
    }
    
    public function getDiklataktif() {
        return $this->hasOne(Diklat::class, ['idpegawai'=>'id'])->where(['status'=>1]);
    }


}
