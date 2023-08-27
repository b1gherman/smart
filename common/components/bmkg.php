<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\components;

/**
 * Description of inventori
 *
 * @author USER
 */
class bmkg extends \yii\base\Component
{
    public function getGolPegAktif($idpegawai)
    {
        $sql = "SELECT `golongan`.`kode_gol`,`golongan`.`pangkat`
        FROM `golonganpegawai`,`golongan`
        WHERE `golonganpegawai`.`idgolongan`=`golongan`.`id` 
        AND `golonganpegawai`.`idpegawai`=$idpegawai 
        AND `golonganpegawai`.`status`='1'";
        $datagolpeg = \Yii::$app->db->createCommand($sql)
            ->queryOne();
        return $datagolpeg;
    }

    public function getJabPegAktif($idpegawai)
    {
        $sql = "SELECT jabatanpegawai.idjabatan, 
        jabatan.namajabatan
        FROM jabatanpegawai INNER JOIN jabatan on jabatanpegawai.idjabatan = jabatan.id 
        AND jabatanpegawai.idpegawai=$idpegawai AND jabatanpegawai.status =1";
        $datajabpeg = \Yii::$app->db->createCommand($sql)
            ->queryOne();
        return $datajabpeg;
    }

    public function getJabatanKepala()
    {
        $sql = "SELECT pegawai.namapegawai, pegawai.nip, jabatan.namajabatan 
        FROM pegawai INNER JOIN jabatanpegawai ON pegawai.id = jabatanpegawai.idpegawai 
        INNER JOIN jabatan ON jabatanpegawai.idjabatan = jabatan.id 
        WHERE jabatan.id =1";
        $datajabkepala = \Yii::$app->db->createCommand($sql)
            ->queryOne();
        return $datajabkepala;
    }

    public function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = \Yii::$app->bmkg->penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = \Yii::$app->bmkg->penyebut($nilai / 10) . " puluh" . \Yii::$app->bmkg->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . \Yii::$app->bmkg->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = \Yii::$app->bmkg->penyebut($nilai / 100) . " ratus" . \Yii::$app->bmkg->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . \Yii::$app->bmkg->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = \Yii::$app->bmkg->penyebut($nilai / 1000) . " ribu" . \Yii::$app->bmkg->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = \Yii::$app->bmkg->penyebut($nilai / 1000000) . " juta" . \Yii::$app->bmkg->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = \Yii::$app->bmkg->penyebut($nilai / 1000000000) . " milyar" . \Yii::$app->bmkg->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = \Yii::$app->bmkg->penyebut($nilai / 1000000000000) . " trilyun" . \Yii::$app->bmkg->penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    }

    public function terbilang($nilai)
    {
        if ($nilai < 0) {
            $hasil = "minus " . trim(\Yii::$app->bmkg->penyebut($nilai));
        } else {
            $hasil = trim(\Yii::$app->bmkg->penyebut($nilai));
        }
        return $hasil;
    }
}
