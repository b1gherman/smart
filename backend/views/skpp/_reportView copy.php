<table style="border-collapse: collapse; width: 97.0817%; height: 329px;" border="1">
    <tbody>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">SATKER</td>
            <td style="text-align: center; height: 18px; width: 42.4818%;" colspan="2" rowspan="2"><strong>&nbsp;</strong><br /><strong>SURAT KETERANGAN PENGHENTIAN PEMBAYARAN (PENSIUN)</strong><br /><strong><br /></strong><strong><br /></strong></td>
            <td style="width: 31.1331%; height: 18px;">Nomor : <?= $model->nomor ?></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;"><?= $modelinstansi->satuanorganisasi; ?></td>
            <td style="width: 31.1331%; height: 18px;">Lamp : SK Pensiun</td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 98.9774%; height: 18px;" colspan="4">Kuasa Pengguna Anggaran/Kepala Stasiun Klimatologi Padang Pariaman, menerangkan bahwa :</td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 98.9774%; height: 13px;" colspan="4"><strong>IDENTITAS PEGAWAI</strong></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">Nama Pegawai</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->pegawai->namapegawai ?></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">NIP</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->pegawai->nip ?></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">Tempat Lahir</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->pegawai->tempatlahir ?></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">Tanggal Lahir</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2"><?= Yii::$app->formatter->asDate($model->pegawai->tgllahir, 'dd-MM-yyyy') ?></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">Golongan / Pangkat</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2">
                <?php
                $datagol = Yii::$app->bmkg->getGolPegAktif($model->id_pegawai);
                echo $datagol['kode_gol'] . " / " . $datagol['pangkat'];
                ?>
            </td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">Jabatan</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2">&nbsp;</td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">Satker &amp; Kode Satker</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $modelinstansi->satuanorganisasi ?> (<?= $modelinstansi->kodesatuan ?>)</td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 98.9774%; height: 18px;" colspan="4"><strong>BERDASARKAN SURAT KEPUTUSAN</strong></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">SK Dari&nbsp;</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2">&nbsp;</td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">Tanggal SK</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2">&nbsp;</td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">Nomor SK</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2">&nbsp;</td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 25.3625%; height: 18px;">Diberhentikan sebagai PNS Terhitung Mulai Tanggal</td>
            <td style="width: 2.00401%; height: 18px;">:</td>
            <td style="width: 71.6109%; height: 18px;" colspan="2">&nbsp;</td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 98.9774%; height: 18px;" colspan="4"><strong>SAMPAI DENGAN BULAN OKTOBER 2020 TELAH DIBAYARKAN GAJI DENGAN RINCIAN :</strong></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 98.9774%; height: 18px;" colspan="4">&nbsp;</td>
        </tr>
    </tbody>
</table>