<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\components;

use Yii;
use yii\base\Component;
use backend\models\Akun;

/**
 * Description of monevComponent
 *
 * @author USER
 */
class sikerma extends Component {

    //put your code here
    public function getKodeAkun(Akun $model) {
        $kode = $model->KODE;
        $sub = $model->SUB;
        $t_akun = Akun::findOne(['ID' => $sub]);
        $hasil = $t_akun->KODETEMP . "." . $kode;
        return $hasil;
    }

    public function getJumlahExpire() {
        $sql = "SELECT COUNT(*) FROM kerjasama WHERE DATEDIFF(CURRENT_DATE,`tglberakhir`) < 6";
        $jum = Yii::$app->db->createCommand($sql)
                ->queryScalar();
        return $jum;
    }

    public function getPNS() {
        $sql = "SELECT COUNT(*) FROM pegawai WHERE `statuskepegawaian` = 'PNS' and aktif=1";
        $jum = Yii::$app->db->createCommand($sql)
                ->queryScalar();
        return $jum;
    }
    
    

    public function getCPNS() {
        $sql = "SELECT COUNT(*) FROM pegawai WHERE `statuskepegawaian` = 'CPNS' and aktif=1";
        $jum = Yii::$app->db->createCommand($sql)
                ->queryScalar();
        return $jum;
    }
    
    public function getTingkatan() {
        $sql = "SELECT tingkatansekolah.`namatingkatan` AS nama,COUNT(riwayatpendidikan.id) AS jumlah FROM `tingkatansekolah` 
LEFT JOIN `riwayatpendidikan` ON tingkatansekolah.id = riwayatpendidikan.`idtingkatansekolah`
INNER JOIN pegawai ON riwayatpendidikan.`idpegawai` = pegawai.id
WHERE riwayatpendidikan.status = 1 AND pegawai.aktif = 1
GROUP BY tingkatansekolah.id
ORDER BY tingkatansekolah.id";
        $jum = Yii::$app->db->createCommand($sql)
                ->queryAll();
        return $jum;
    }
    
    public function getJumlahGol() {
        $sql = "SELECT `golongan`.`kode_gol` AS nama,COUNT(`golonganpegawai`.id) AS jumlah FROM `golongan`
LEFT JOIN `golonganpegawai` ON `golongan`.id = `golonganpegawai`.`idgolongan`
INNER JOIN pegawai ON golonganpegawai.`idpegawai` = pegawai.id
WHERE golonganpegawai.status = 1 AND pegawai.`aktif`=1
GROUP BY `golongan`.id
ORDER BY `golongan`.id";
        $jum = Yii::$app->db->createCommand($sql)
                ->queryAll();
        return $jum;
    }
    
    public function getLaki() {
        $sql = "SELECT COUNT(*) FROM pegawai WHERE `jeniskelamin` = 'Laki-laki' and aktif=1";
        $jum = Yii::$app->db->createCommand($sql)
                ->queryScalar();
        return $jum;
    }
    
    public function getPerempuan() {
        $sql = "SELECT COUNT(*) FROM pegawai WHERE `jeniskelamin` = 'Perempuan' and aktif=1";
        $jum = Yii::$app->db->createCommand($sql)
                ->queryScalar();
        return $jum;
    }

    public function getJumlahCuti($jeniscuti, $idpegawai, $tahun) {
        $sql = "SELECT sum(lama) FROM `cuti` WHERE id_jeniscuti=$jeniscuti AND `id_pegawai`=$idpegawai AND year(tglmulaicuti)=$tahun";
        $jum = Yii::$app->db->createCommand($sql)
                ->queryScalar();
        return $jum;
    }

    public function getMasakerja($idpegawai) {
        $data1 = [
            'tahun' => 0,
            'bulan' => 0
        ];
        if ($idpegawai != null) {
            $sql = "SELECT masakerjatahun as tahun, masakerjabulan as bulan
FROM `riwayatkerja`
WHERE idpegawai=$idpegawai AND idsk=1";
            $data = \Yii::$app->db->createCommand($sql)
                    ->queryOne();
            if ($data) {
                return $data;
            }
        }
        return $data1;
    }

    public function getTahunBulan($tgl) {
        $data1 = [
            'tahun' => 0,
            'bulan' => 0
        ];
        if ($tgl != null) {
            $sql = "SELECT TIMESTAMPDIFF(YEAR,'$tgl',CURRENT_DATE) AS tahun,
TIMESTAMPDIFF(MONTH,'$tgl',CURRENT_DATE) - (TIMESTAMPDIFF(YEAR,'$tgl',CURRENT_DATE) * 12) AS bulan";
            $data = \Yii::$app->db->createCommand($sql)
                    ->queryOne();
            if ($data) {
                return $data;
            }
        }
        return $data1;
    }

    public function getRole($userid) {
        $temp = '';
        $role = \Yii::$app->authManager->getRolesByUser($userid);
        if (is_array($role)) {
            if (!empty($role)) {
                $temp = array_shift($role)->name;
            }
        }
        return $temp;
    }

}
