<?php
$masakerja = Yii::$app->sikerma->getTahunBulan($model->pegawai->tglcpns);
?>
<table style="width: 100%;" border="0">
    <tbody>
        <tr>
            <td style="width: 40%;"><br>
            </td>
            <td style="text-align: center; width: 60%;">Padang Pariaman, <?= Yii::$app->formatter->asDate('now', 'dd MMMM yyyy') ?> </td>
        </tr>
        <tr>
            <td><br>
            </td>
            <td style="text-align: left;">Yth. Kepala <?=$modelinstansi->namainstansi?> </td>
        </tr>
        <tr>
            <td><br>
            </td>
            <td>di tempat</td>
        </tr>
    </tbody>
</table>
<table style="width: 100%;" border="0">
    <tbody>
        <tr>
            <td><br>
            </td>
        </tr>
        <tr align="center">
            <td style="text-align: center;"><b>FORMULIR PERMINTAAN DAN PEMBERIAN CUTI</b></td>
        </tr>
        <tr>
            <td><br>
            </td>
        </tr>
    </tbody>
</table>
<table style="width: 100%;border: 1px solid black; border-collapse: collapse;" cellspacing="0" cellpadding="0" border="1">
    <tbody>
        <tr>
            <td rowspan="1" colspan="4"><b>I. DATA PEGAWAI</b></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td style="height: 20px;"><?= $model->pegawai->namapegawai ?></td>
            <td>NIP</td>
            <td><?= $model->pegawai->nip ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td><?= $model->pegawai->jabatanaktif->jabatan->namajabatan ?></td>
            <td>Masa Kerja</td>
            <td><?= $masakerja['tahun'] ?> Tahun <?= $masakerja['bulan'] ?> Bulan</td>
        </tr>
        <tr>
            <td>Unit Kerja</td>
            <td colspan="3"><?= $modelinstansi->namainstansi ?></td>
        </tr>
    </tbody>
</table>
<br>
<table style="width: 100%;border: 1px solid black; border-collapse: collapse;" cellspacing="0" cellpadding="0" border="1">
    <tbody>
        <tr>
            <td><b>II. JENIS CUTI YANG DIAMBIL</b><br>
            </td>
        </tr>
        <tr>
            <td><?= $model->jeniscuti->namajeniscuti ?><br>
            </td>
        </tr>
    </tbody>
</table>
<br>
<table style="width: 100%;border: 1px solid black; border-collapse: collapse;" cellspacing="0" cellpadding="0" border="1">
    <tbody>
        <tr>
            <td><b>III. ALASAN CUTI</b></td>
        </tr>
        <tr>
            <td><?= $model->alasan ?></td>
        </tr>
    </tbody>
</table>
<br>
<table style="width: 100%;border: 1px solid black; border-collapse: collapse;" cellspacing="0" cellpadding="0" border="1">
    <tbody>
        <tr>
            <td rowspan="1" colspan="4"><b>IV. LAMANYA CUTI</b></td>
        </tr>
        <tr>
            <td>Selama</td>
            <td><?= $model->lama ?> Hari Kerja</td>
            <td>Mulai Tanggal</td>
            <td style="text-align: center"><?= $model->tglmulaicuti ?> s/d <?= $model->tglakhircuti ?></td>
        </tr>
    </tbody>
</table>
<br>
<table style="width: 100%;border: 0.1px solid" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td colspan="2" style="height: 20px;"><b>V. CATATAN CUTI</b></td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%;border: 0.1px solid"  border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td colspan="3">1. CUTI TAHUNAN</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 0.1px solid">Tahun</td>
                            <td style="text-align: center; border: 0.1px solid">Sisa</td>
                            <td style="text-align: center; border: 0.1px solid">Keterangan</td>
                        </tr>
                        <?php
                        foreach ($cutitahuns as $value):
                            $sisa = $value['sisa'];
                            ?>
                            <tr>
                                <td style="text-align: center; border: 0.1px solid"><?= $value['tahun'] ?></td>
                                <td style="text-align: center; border: 0.1px solid"><?= $sisa ?></td>
                                <td style="text-align: center; border: 0.1px solid"></td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </td>

            <td>
                <table style="width: 100%;border: 0.1px solid" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($jeniscuti as $value):
                            $no++;
                            if ($model->id_jeniscuti == $value['id']) {
                                ?>
                                <tr>
                                    <td style="border: 0.2px solid"><?= $no . '. ' . $value['namajeniscuti'] ?></td>
                                    <td style=" width: 5%;border: 0.2px solid"><?= $model->lama ?></td>
                                </tr>
                                <?php
                            } else {
                                ?>
                                <tr>
                                    <td style="border: 0.2px solid"><?= $no . '. ' . $value['namajeniscuti'] ?></td>
                                    <td style=" width: 5%;border: 0.2px solid"></td>
                                </tr>
                                <?php
                            }
                        endforeach;
                        ?>
                    </tbody>
                </table>

            </td>
        </tr>
    </tbody>
</table>
<br>
<table style="width: 100%;border: 0.1px solid" cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td style="width: 100%;border: 0.1px solid" rowspan="1" colspan="2"><b>VI. ALAMAT SELAMA MENJALANKAN CUTI</b></td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 50%"><?= $model->alamatselamacuti ?></td>
            <td>
                <table style="width: 100%;border: 0.1px solid" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td style="text-align: center; width: 50%; border: 0.1px solid">TELP</td>
                            <td style="text-align: center; width: 50%; border: 0.1px solid"><?= $model->pegawai->hp ?></td>
                        </tr>
                        <tr align="center">
                            <td rowspan="1" colspan="2" style="text-align: center; height: 20px;border: 0.1px solid">Hormat Saya</td>
                        </tr>
                        <tr>
                            <td rowspan="1" colspan="2" style="height: 20px;"><br>
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 20px;" rowspan="1" colspan="2"><br>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="1" colspan="2"><br>
                            </td>
                        </tr>
                        <tr align="center">
                            <td style="text-align: center; border: 0.1px solid" rowspan="1" colspan="2"><?= $model->pegawai->namapegawai ?></td>
                        </tr>
                        <tr align="center">
                            <td style="text-align: center; border: 0.1px solid" rowspan="1" colspan="2">NIP:<?= $model->pegawai->nip ?></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<table style="width: 100%;border: 0.1px solid" cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td style="height: 20px;border: 0.1px solid" rowspan="1" colspan="4"><b>VII. PERTIMBANGAN
                    ATASAN LANGSUNG</b></td>
        </tr>
        <tr>
            <td style="text-align: center; width: 25%; border: 0.1px solid">DISETUJUI</td>
            <td style="text-align: center; width: 25%; border: 0.1px solid">PERUBAHAN</td>
            <td style="text-align: center; width: 20%; border: 0.1px solid">DITANGGUHKAN</td>
            <td style="text-align: center; width: 30%; border: 0.1px solid">TIDAK DISETUJUI</td>
        </tr>
        <tr>
            <td style="text-align: center; border: 0.1px solid">
                <?php
                if ($model->status == 'DISETUJUI') {
                    echo "V";
                } else {
                    echo "";
                }
                ?>
            </td>
            <td style="text-align: center; border: 0.1px solid">
                <?php
                if ($model->status == 'PERUBAHAN') {
                    echo "V";
                } else {
                    echo "";
                }
                ?>
            </td>
            <td style="text-align: center; border: 0.1px solid">
                <?php
                if ($model->status == 'DITANGGUHKAN') {
                    echo "V";
                } else {
                    echo "";
                }
                ?>
            </td>
            <td style="text-align: center; border: 0.1px solid">
                <?php
                if ($model->status == 'TIDAK DISETUJUI') {
                    echo "V";
                } else {
                    echo "";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><br>
            </td>
            <td><br>
            </td>
            <td><br>
            </td>
            <td>
                <table style="width: 100%;border: 0.1px solid" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td><br>
                            </td>
                        </tr>
                        <tr>
                            <td><br>
                            </td>
                        </tr>
                        <tr>
                            <td><br>
                            </td>
                        </tr>
                        <tr align="center">
                            <td style="text-align: center; border: 0.1px solid"><?= $ttd2->pegawai->namapegawai ?></td>
                        </tr>
                        <tr align="center">
                            <td style="text-align: center; border: 0.1px solid">NIP:<?= $ttd2->pegawai->nip ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
            </td>
        </tr>
    </tbody>
</table>
<table style="width: 100%;border: 0.1px solid" cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td style="height: 20px;border: 0.1px solid" rowspan="1" colspan="4"><b>VIII. KEPUTUSAN
                    PEJABAT YANG BERWENANG MEMBERIKAN CUTI</b></td>
        </tr>
        <tr>
            <td style="text-align: center; width: 25%; border: 0.1px solid">DISETUJUI</td>
            <td style="text-align: center; width: 25%; border: 0.1px solid">PERUBAHAN</td>
            <td style="text-align: center; width: 20%; border: 0.1px solid">DITANGGUHKAN</td>
            <td style="text-align: center; width: 30%; border: 0.1px solid">TIDAK DISETUJUI</td>
        </tr>
        <tr>
            <td style="text-align: center; border: 0.1px solid">
                <?php
                if ($model->status1 == 'DISETUJUI') {
                    echo "V";
                } else {
                    echo "";
                }
                ?>
            </td>
            <td style="text-align: center; border: 0.1px solid">
                <?php
                if ($model->status1 == 'PERUBAHAN') {
                    echo "V";
                } else {
                    echo "";
                }
                ?>
            </td>
            <td style="text-align: center; border: 0.1px solid">
                <?php
                if ($model->status1 == 'DITANGGUHKAN') {
                    echo "V";
                } else {
                    echo "";
                }
                ?>
            </td>
            <td style="text-align: center; border: 0.1px solid">
                <?php
                if ($model->status1 == 'TIDAK DISETUJUI') {
                    echo "V";
                } else {
                    echo "";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><br>
            </td>
            <td><br>
            </td>
            <td><br>
            </td>
            <td>
                <table style="width: 100%;border: 0.1px solid" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td><br>
                            </td>
                        </tr>
                        <tr>
                            <td><br>
                            </td>
                        </tr>
                        <tr>
                            <td><br>
                            </td>
                        </tr>
                        <tr align="center">
                            <td style="text-align: center;border: 0.1px solid"><?= $ttd1->pegawai->namapegawai ?><br>
                            </td>
                        </tr>
                        <tr align="center">
                            <td style="text-align: center;border: 0.1px solid">NIP:<?= $ttd1->pegawai->nip ?><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
            </td>
        </tr>
    </tbody>
</table>