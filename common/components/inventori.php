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
class inventori extends \yii\base\Component
{

    //put your code here
    public function getSupplier()
    {
        $hasil = array();
        $suppliers = \backend\models\Supplier::find()->all();
        foreach ($suppliers as $value) {
            $hasil[] = [
                'id' => $value->id,
                'nama' => $value->nama . "-" . $value->id
            ];
        }
        return $hasil;
    }

    public function getBarangs()
    {
        $hasil = array();
        $barangs = \backend\models\Barang::find()->all();
        foreach ($barangs as $value) {
            $kategori = \backend\models\Kategori::findOne($value->KATEGORI_ID);
            $hasil[] = [
                'id' => $value->id,
                'nama' => $kategori->kategori . "-" . $value->nmbrg . "-" . $value->kdbrg
            ];
        }
        return $hasil;
    }

    public function getRole($userid)
    {
        $temp = '';
        $role = \Yii::$app->authManager->getRolesByUser($userid);
        if (is_array($role)) {
            if (!empty($role)) {
                $temp = array_shift($role)->name;
            }
        }
        return $temp;
    }

    public function getRoles()
    {
        $hasil = array();
        $available_roles = \Yii::$app->authManager->getRoles();
        $i = 1;
        foreach ($available_roles as $role) {
            $hasil[] = [
                'id' => $i++,
                'name' => $role->name
            ];
        }
        return $hasil;
    }

    public function getStokAwal($kodebarang, $idbagian, $tgl)
    {
        $jum = 0;
        if ($kodebarang !== '' && $tgl !== '') {
            $sql = "SELECT sum(masuk) - sum(keluar) FROM stok where idbarang = $kodebarang and idbagian= $idbagian and CAST(create_at AS DATE) < '$tgl'";
            $jum = \Yii::$app->db->createCommand($sql)
                ->queryScalar();
            if (is_null($jum)) {
                $jum = 0;
            }
        }
        return $jum;
    }

    public function getStokBarang($kodebarang, $idbagian)
    {
        //$jum = 0;
        $sql = "select stok from barangstok where idbarang= $kodebarang and idbagian= $idbagian";
        $jum = \Yii::$app->db->createCommand($sql)
            ->queryScalar();
        if ($jum == false) {
            $jum = 0;
        }
        return $jum;
    }

    public function getSatuan($id)
    {
        $sql = "SELECT satuan FROM `satuan` WHERE id=$id";
        $satuan = \Yii::$app->db->createCommand($sql)
            ->queryScalar();
        if ($satuan == false) {
            $satuan = '';
        }
        return $satuan;
    }

    public function getKategori($id)
    {
        $sql = "SELECT `kategori` FROM `kategori` WHERE id=$id";
        $temp = \Yii::$app->db->createCommand($sql)
            ->queryScalar();
        if ($temp == false) {
            $temp = '';
        }
        return $temp;
    }

    public function kurangTanggal($tgl1, $tgl2)
    {
        $sql = "SELECT DATEDIFF('$tgl1','$tgl2') AS hasil";
        $temp = \Yii::$app->db->createCommand($sql)
            ->queryScalar();
        if ($temp == false) {
            $temp = 0;
        }
        return $temp;
    }

    public function getJumlahTerlambat()
    {
        $sql = "SELECT COUNT(*) FROM peminjaman WHERE DATEDIFF(CURRENT_DATE,`tglkembali`) > 10";
        $jum = \Yii::$app->db->createCommand($sql)
            ->queryScalar();
        return $jum;
    }
}
