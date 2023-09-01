<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">Lembar Ke :</td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">Kode No :</td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">Nomor : <?= $model->nomor ?></td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr align="center">
                <td style="text-align: center"><b>SURAT PERJALANAN DINAS (SPD)</b></td>
            </tr>
            <tr>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td style="width: 17.7264%;">1 Pejabat Pembuat Komitmen</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->idppk0->namapegawai ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%; height: 36px;" rowspan="2">2 Nama/NIP Pegawai yang melaksanakan perjalanan dinas</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->idppd0->namapegawai ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;">NIP. <?= $model->idppd0->nip ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">3 a. Pangkat dan Golongan</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;">a. <?= $modelgolonganppd->pangkat ?> / <!?= $modelgolonganppd->kode_gol ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">&nbsp;&nbsp;&nbsp;b. Jabatan / Instansi</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;">b.<?= $modeljabatanppd->namajabatan ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">&nbsp;&nbsp;&nbsp;c. Tingkat Biaya Perjalanan Dinas</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;">c.<?= $model->tingkat_biaya ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">4 Maksud Perjalanan Dinas</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->maksud ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">5 Alat angkut yang dipergunakan</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->alat_angkut ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">6 a. Tempat berangkat</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->tempat_berangkat ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">&nbsp;&nbsp;&nbsp;b. Tempat tujuan</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->tujuan ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">7 a. Lamanya Perjalanan Dinas</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->lama ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">&nbsp;&nbsp;&nbsp;b. Tanggal berangkat</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->tgl_berangkat ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">&nbsp;&nbsp;&nbsp;c. Tanggal harus kembali</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->tgl_kembali ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">8 Pengikut</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?php //= $model->lama ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">9 Pembebanan Anggaran</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;">&nbsp;</td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">&nbsp;&nbsp;&nbsp;a. Instansi</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->idanggaranInstansi->namainstansi ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">&nbsp;&nbsp;&nbsp;b. Akun</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->anggaran_akun ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">10 Keterangan lain-lain</td>
                <td style="width: 1%;">:</td>
                <td style="width: 30.925%;"><?= $model->keterangan_lain ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 17.7264%;">&nbsp;</td>
                <td style="width: 1%;">&nbsp;</td>
                <td style="width: 30.925%;">&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">Dikeluarkan di : <?= $model->tempat ?></td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;"><?= $model->idppk0->namapegawai ?></td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;"><?= $model->idppk0->nip ?></td>
            </tr>
        </tbody>
    </table>
</div>