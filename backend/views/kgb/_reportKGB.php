<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <br>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td>Nomor</td>
                <td style="width: 50%">: <?= $model->nomor ?></td>
                <td rowspan="1" colspan="2">Padang Pariaman, <?= Yii::$app->formatter->asDate('now', 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>: -</td>
                <td rowspan="1" colspan="2">Kepada</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>: Kenaikan Gaji Berkala</td>
                <td rowspan="1" colspan="2">Yth. Kepala Kantor Pelayanan</td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>a/n. <?= $model->pegawai->namapegawai ?></td>
                <td><br>
                </td>
                <td>Perbendaharaan Negara</td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
                <td>Di</td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Padang</td>
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
                <td>Dengan&nbsp; ini kami&nbsp; beritahukan&nbsp; bahwa&nbsp;
                    berhubung&nbsp; dengan&nbsp; telah&nbsp; dipenuhinya masa kerja dan
                    syarat-syarat lainnya, maka kepada :</td>
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
                <td>1. Nama</td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->namapegawai ?><br>
                </td>
            </tr>
            <tr>
                <td>2. NIP&nbsp;&nbsp;&nbsp; </td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->nip ?><br>
                </td>
            </tr>
            <tr>
                <td>3. Pangkat/Golongan</td>
                <td>:<br>
                </td>
                <td><?= $model->pegawai->golaktif->golongan->pangkat . ' / ' . $model->pegawai->golaktif->golongan->kode_gol ?><br>
                </td>
            </tr>
            <tr>
                <td>4. Kantor/tempat</td>
                <td>:<br>
                </td>
                <td><?= $modelinstansi->namainstansi ?><br>
                </td>
            </tr>
            <tr>
                <td>5. Gaji Pokok Lama</td>
                <td>:<br>
                </td>
                <td><?= Yii::$app->formatter->asCurrency($model->sklama->riwayatkerja->gapok) ?><br>
                </td>
            </tr>
            <tr>
                <td rowspan="1" colspan="3">&nbsp;&nbsp;&nbsp; (Atas dasar PP No.
                    15,16 dan 17 Tahun 2019)</td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td style="width: 5%"><br>
                </td>
                <td style="width: 40%">a.&nbsp;Oleh Pejabat</td>
                <td style="width: 3%">:<br>
                </td>
                <td><?= $model->sklama->pejabat ?><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td style="height: 20px;">b.&nbsp;Tanggal<br>
                </td>
                <td>:<br>
                </td>
                <td><?= Yii::$app->formatter->asDate($model->sklama->tgl, 'dd MMMM yyyy') ?><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>c.&nbsp;Nomor<br>
                </td>
                <td>:<br>
                </td>
                <td><?= $model->sklama->nosk ?><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>d.&nbsp;Tanggal mulai berlaku SK Tersebut</td>
                <td>:<br>
                </td>
                <td><?= Yii::$app->formatter->asDate($model->sklama->riwayatkerja->tglmulai, 'dd MMMM yyyy') ?><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>e .&nbsp;Masa kerja golongan pada gaji/tgl tsb</td>
                <td>:<br>
                </td>
                <td>
                    <?php
                    //$masa = Yii::$app->sikerma->getTahunBulan($model->sklama->riwayatkerja->tglmulai);
                    echo $model->sklama->riwayatkerja->masakerjatahun . ' tahun ' . $model->sklama->riwayatkerja->masakerjabulan . ' bulan';
                    ?>
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
                <td>Diberikan Kenaikan Gaji Berkala, hingga memperoleh :</td>
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
                <td>6. Gaji pokok baru</td>
                <td>:<br>
                </td>
                <td><?= Yii::$app->formatter->asCurrency($model->gapokbaru) ?></td>
            </tr>
            <tr>
                <td>7. Berdasarkan masa kerja</td>
                <td>:<br>
                </td>
                <td><?= $model->masakerjabarutahun ?> tahun <?= $model->masakerjabarubulan ?> bulan</td>
            </tr>
            <tr>
                <td>8. Dalam Golongan</td>
                <td>:<br>
                </td>
                <td><?= $model->golbaru->pangkat . ' / ' . $model->golbaru->kode_gol ?></td>
            </tr>
            <tr>
                <td>9. Mulai tanggal</td>
                <td>:<br>
                </td>
                <td><?= Yii::$app->formatter->asDate($model->tanggalbaru, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td>Diharap agar sesuai dengan ayat 1 pasal 51 dari Keputusan Presiden
                    No.16 tahun 1994, menjadi Peraturan Pemerintah No. 15,16 dan 17
                    Tahun 2019.<br>
                    Kepada pegawai tersebut diatas dapat dibayarkan penghasilan
                    berdasarkan gaji pokok baru.</td>
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
                <td style="width: 40%"><br>
                </td>
                <td style="text-align: center">A/n. Kepala Badan Meteorologi Klimatologi dan Geofisika<br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td style="text-align: center"><?= $ttd1->jabatan->namajabatan ?><br>
                </td>
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
                <td><br>
                </td>
                <td style="text-align: center"><?= $ttd1->pegawai->namapegawai ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td style="text-align: center">NIP. <?= $ttd1->pegawai->nip ?></td>
            </tr>
        </tbody>
    </table>
    <table border="0">
        <tbody>
            <tr>
                <td>Tembusan:<br>
                </td>
            </tr>
            <tr>
                <td><?= Yii::$app->formatter->asNtext($model->tembusan) ?></td>
            </tr>
        </tbody>
    </table>

</div>