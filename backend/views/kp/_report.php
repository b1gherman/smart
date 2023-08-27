<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<br>
<br>
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr align="center">
                <td style="text-align: center">SURAT KETERANGAN</td>
            </tr>
            <tr align="center">
                <td style="text-align: center">UNTUK MENDAPATKAN PEMBAYARAN TUNJANGAN KELUARGA</td>
            </tr>
            <tr align="center">
                <td style="text-align: center">NOMOR :<?= $model->nomor ?> </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr>
                <td>Saya yang bertanda tangan dibawah ini </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td>1. Nama Lengkap</td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->namapegawai ?><br>
                </td>
            </tr>
            <tr>
                <td>2. Tempat/ Tgl. Lahir<br>
                </td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->tempatlahir . ' / ' . Yii::$app->formatter->asDate($model->pegawai->tgllahir, 'dd MMMM yyyy'); ?><br>
                </td>
            </tr>
            <tr>
                <td>3. Jenis Kelamin<br>
                </td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->jeniskelamin ?><br>
                </td>
            </tr>
            <tr>
                <td>4. Agama</td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->agama->agama ?><br>
                </td>
            </tr>
            <tr>
                <td>5. Status Kepegawaian</td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->statuskepegawaian ?><br>
                </td>
            </tr>
            <tr>
                <td>6. Jabatan Struktural / Fungsional</td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->jabatanaktif->jabatan->namajabatan . " / " . $model->pegawai->jabatanaktif->esl ?><br>
                </td>
            </tr>
            <tr>
                <td>7. Pangkat / Golongan</td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->golaktif->golongan->pangkat . " / " . $model->pegawai->golaktif->golongan->kode_gol ?><br>
                </td>
            </tr>
            <tr>
                <td>8. Pada Instansi Dep/Lembaga</td>
                <td>:<br>
                </td>
                <td><?= $modelinstansi->namainstansi ?><br>
                </td>
            </tr>
            <tr>
                <td>9. Masa Kerja Golongan</td>
                <td>:<br>
                </td>
                <td>
                    <?php
                    $masa = Yii::$app->sikerma->getTahunBulan($model->pegawai->golaktif->tmt);
                    echo $masa['tahun'] . ' tahun ' . $masa['bulan'] . ' bulan';
                    ?><br>
                </td>
            </tr>
            <tr>
                <td>10. Digaji Menurut</td>
                <td>:<br>
                </td>
                <td>Gaji Pokok <?= Yii::$app->formatter->asCurrency($model->pegawai->gajipokok) ?><br>
                </td>
            </tr>
            <tr>
                <td>11. Alamat / Tempat Tinggal</td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->alamat ?><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr>
                <td>Menerangkan dengan sesungguhnya</td>
            </tr>
            <tr>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td style="width: 3%">a.</td>
                <td>Disamping jabatan utama tersebut, bekerja pula sebagai: <br>
                </td>
                <td>-<br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>dengan mendapat penghasilan sebesar<br>
                </td>
                <td>Rp. 0<br>
                </td>
            </tr>
            <tr>
                <td>b.<br>
                </td>
                <td>Mempuyai pensiun / pensiun janda<br>
                </td>
                <td>Rp. 0<br>
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Mempunyai susunan keluarga sbb:</td>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="1">
        <tbody>


            <tr>
                <td rowspan="2" colspan="1">No.</td>
                <td rowspan="2" colspan="1">Nama istri/suami/anak tanggungan</td>
                <td rowspan="1" colspan="2">Tanggal</td>
                <td rowspan="2" colspan="1">Pekerjaan/<br>
                    Sekolah</td>
                <td rowspan="2" colspan="1">Keterangan <br>
                    (AK, AT, AA</td>
            </tr>
            <tr>
                <td>Kelahiran (Umur)</td>
                <td>Perkawinan</td>
            </tr>
            <?php
            $no = 0;
            $istri = \backend\models\Pasangan::findAll(['idpegawai' => $model->idpegawai]);
            foreach ($istri as $value):
                $no++
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value['nama'] ?></td>
                    <td><?= Yii::$app->formatter->asDate($value['tgllahir'],'dd-MM-yyyy') ?></td>
                    <td><?= Yii::$app->formatter->asDate($value['tglperkawinan'],'dd-MM-yyyy') ?></td>
                    <td><?= $value['pekerjaan']['namapekerjaan'] ?><br>
                    </td>
                    <td>Istri</td>
                </tr>
                <?php
            endforeach;
            ?>
            <?php
            $anak = \backend\models\Anakpegawai::findAll(['id_pegawai' => $model->idpegawai]);
            foreach ($anak as $value):
                $no++;
                ?>   
                <tr>
                    <td><?=$no?><br>
                    </td>
                    <td><?=$value['namaanak']?><br>
                    </td>
                    <td><?=Yii::$app->formatter->asDate($value['tgl_lahir'],'dd-MM-yyyy')?><br>
                    </td>
                    <td>-<br>
                    </td>
                    <td><?= $value['pekerjaan']['namapekerjaan'] ?><br>
                    </td>
                    <td><?= $value['statusanak']['status'] ?><br>
                    </td>
                </tr>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td style="width:3%">d.</td>
                <td>Jumlah anak seluruhnya(yang menjadi tanggungan termasuk yang tidak masuk dalam daftar
                    gaji)</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr>
                <td>Keterangan ini saya buat dengan sesungguhnya dan apabila
                    keterangan ini ternyata tidak benar (palsu) saya bersedia dituntut
                    pengadilan berdasarkan undang-undang yang berlaku dan bersedia
                    mengembalikan semua penghasilan yang telah saya terima yang
                    seharusnya bukan menjadi hak saya.</td>
            </tr>
            <tr>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td>Mengetahui</td>
                <td>Padang Pariaman, <?= Yii::$app->formatter->asDate($model->tanggal,'dd MMMM yyyy')?> </td>
            </tr>
            <tr>
                <td><?= $ttd1->jabatan->namajabatan ?></td>
                <td>Yang menerangkan</td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td><?= $ttd1->pegawai->namapegawai ?></td>
                <td><?=$model->pegawai->namapegawai?> </td>
            </tr>
            <tr>
                <td>NIP. <?= $ttd1->pegawai->nip ?></td>
                <td>NIP. <?=$model->pegawai->nip?></td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr>
                <td>Catatan :</td>
            </tr>
            <tr>
                <td>*) : coret yang tidak perlu</td>
            </tr>
        </tbody>
    </table>
</div>