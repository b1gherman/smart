<!--<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">-->
<img src="<?php echo Yii::getAlias("@web") ?>/images/bmkg.png"

                                                           alt="" style="width: 79px; height: 98px;">
<div style="padding-left: 55px;padding-right: 45px">
    <table style="width: 100%;" border="0">
        <tbody>
            <tr>
                <td rowspan="1" colspan="3" style="text-align: center;"><h5>DAFTAR
                        RIWAYAT PEKERJAAN</h5></td>
            </tr>
            <tr>
                <td style="height: 20px;" rowspan="1" colspan="3"><br>
                </td>
            </tr>
            <tr>
                <td style="width: 5%;">1. </td>
                <td style="width: 40%;">N a m a</td>
                <td style="width: 50%;"><?= $model->namapegawai; ?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Tempat / Tanggal Lahir</td>
                <td><?= $model->tempatlahir . ' / ' . Yii::$app->formatter->asDate($model->tgllahir, 'dd MMMM yyyy'); ?></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Nomor Induk Pegawai</td>
                <td><?= $model->nip ?><br>
                </td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Pangkat / Golongan Ruang Gaji</td>
                <td><?= $model->pangkat . ' / ' . $model->golongan ?><br>
                </td>
            </tr>
            <tr>
                <td>5.</td>
                <td>J a b a t a n</td>
                <td><?= $model->jabatan; ?><br>
                </td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Pendidikan</td>
                <td>
                    <table border="0">
                        <tbody>
                            <?php
                            foreach ($pendidikan as $value):
                                ?>
                                <tr>
                                    <td><?=$value['tingkat']['kodetingkatan'] .'  '. $value['jurusan']['namajurusan']. ' tahun ' . $value['tahunlulus'] ?></td>
                                </tr>
                                <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>

                </td>
            </tr>

            <tr>
                <td>7.</td>
                <td>A l a m a t</td>
                <td><?= $model->alamat; ?>
                </td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Keanggotaan Partai Politik</td>
                <td>-
                </td>
            </tr>
            <tr>
                <td>9.</td>
                <td style="height: 20px;">Keterangan tidak terlibat G.30 S / PKI.</td>
                <td>-
                </td>
            </tr>
            <tr>
                <td>10.</td>
                <td>Daftar Riwayat Pekerjaan</td>
                <td><br>
                </td>
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
    <table style="width: 100%;" cellspacing="0" cellpadding="0" border="1">
        <tbody>
            <tr>
                <td rowspan="2" colspan="1" style="text-align: center;">No</td>
                <td rowspan="2" colspan="1" style="text-align: center;">Uraian
                    (Perubahan Pangkat Jabatan Lainnya)</td>
                <td rowspan="2" colspan="1" style="text-align: center;">Mulai dan
                    Sampai</td>
                <td rowspan="2" colspan="1" style="text-align: center;">Gol Ruang Gaji</td>
                <td rowspan="2" colspan="1" style="height: 45.3333px; text-align: center;">Gaji
                    Pokok (Rp)</td>
                <td rowspan="1" colspan="3" style="text-align: center;">Surat
                    Keputusan / Bukti Pengalaman</td>
            </tr>
            <tr>
                <td style="text-align: center;">Pejabat</td>
                <td style="text-align: center;">Nomor</td>
                <td style="text-align: center;">Tanggal</td>
            </tr>
            <?php
            $no = 0;
            foreach ($riwayatkerja as $value):
                $no++;
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no ?></td>
                    <td><?= $value['sk']['jenissk']['jenis'] ?></td>
                    <td style="text-align: center;"><?= Yii::$app->formatter->asDate($value['tglmulai'], 'dd-MM-yyyy'); ?>
                    </td>
                    <td style="text-align: center;"><?= $value['golongan1']['kode_gol'] ?></td>
                    <td style="text-align: right;"><?= Yii::$app->formatter->asDecimal($value['gapok']) ?></td>
                    <td><?= $value['sk']['pejabat'] ?></td>
                    <td><?= $value['sk']['nosk'] ?></td>
                    <td style="text-align: center;"><?= Yii::$app->formatter->asDate($value['sk']['tgl'], 'dd-MM-yyyy'); ?></td>
                </tr>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>
    <br>
    <table style="width: 100%;" border="0">
        <tbody>
            <tr>
                <td rowspan="1" colspan="3">Demikian Daftar Riwayat Pekerjaan ini saya
                    perbuat dengan sesungguhnya, bila dikemudian hari terdapat
                    keterangan yang tidak benar, saya bersedia dituntut dimuka hakim.</td>
            </tr>
            <tr>
                <td style="width: 40%;"><br>
                </td>
                <td style="width: 20%;"><br>
                </td>
                <td style="text-align: center;">Padang Pariaman, <?= Yii::$app->formatter->asDate('now', 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">Mengetahui</td>
                <td><br>
                </td>
                <td style="width: 40%; text-align: center;">Yang membuat,</td>
            </tr>
            <tr>
                <td style="text-align: center;">Kepala Stasiun Klimatologi Padang Pariaman</td>
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
                <td><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">Heron Tarigan, SP, M.Si </td>
                <td><br>
                </td>
                <td style="text-align: center;"><?= $model->namapegawai; ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">NIP:196802131990031002</td>
                <td><br>
                </td>
                <td style="text-align: center;">NIP:<?= $model->nip ?></td>
            </tr>
        </tbody>
    </table>
</div>