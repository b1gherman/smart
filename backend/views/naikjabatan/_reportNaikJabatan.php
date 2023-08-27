<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td style="width: 20%">Nomor</td>
                <td style="width: 40%">: <?= $model->nomor ?></td>
                <td>Padang Pariaman, <?= Yii::$app->formatter->asDate('now', 'dd MMMM yyyy'); ?></td>
            </tr>
            <tr>
                <td>Sifat</td>
                <td>: Segera&nbsp; </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>: <?= $model->jumlahberkas ?> Berkas</td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>:Usulan Kenaikan Jabatan </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>a/n. Sdr. <?= $model->pegawai->namapegawai ?></td>
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
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td rowspan="1" colspan="3">Yth. Kepala Biro Umum
                    dan SDM</td>
            </tr>
            <tr>
                <td style="width: 5%;"><br>
                </td>
                <td rowspan="1" colspan="2">Cq. Kepala Bagian SDM</td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td rowspan="1" colspan="2">Badan Meteorologi, Klimatologi dan
                    Geofisika</td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td rowspan="1" colspan="2">Di</td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td style="width: 5%;"><br>
                </td>
                <td style="">Jakarta</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td rowspan="1" colspan="4"> Bersama ini kami sampaikan berkas usulan
                    untuk dinaikkan menjadi <?=$model->jabatanbaru->namajabatan?> :</td>
            </tr>
            <tr>
                <td style="width: 10%;"><br>
                </td>
                <td style="width: 30%;">Nama<br>
                </td>
                <td colspan="2"><?= $model->pegawai->namapegawai ?><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>Nip<br>
                </td>
                <td colspan="2"><?= $model->pegawai->nip ?><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>Pangkat/Gol</td>
                <td colspan="2"><?= $model->pegawai->golaktif->golongan->pangkat . ' / ' . $model->pegawai->golaktif->golongan->kode_gol ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>Jabatan </td>
                <td colspan="2"><?= $model->pegawai->jabatanaktif->jabatan->namajabatan ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>Unit Kerja</td>
                <td colspan="2"><?= $modelinstansi->namainstansi ?></td>
            </tr>
            <tr>
                <td rowspan="1" colspan="4"><br></td>
            </tr>
            <tr>
                <td rowspan="1" colspan="4">Sebagai kelengkapan
                    usulan kami lampirkan masing-masing 2 rangkap :</td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td colspan="3">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($syarat as $value):
                                $no++
                                ?>
                                <tr>
                                    <td><?= $no . '. ' ?></td>
                                    <td><?= $value['syarat'] ?></td>
                                </tr>
                                <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td colspan="4">Demikian disampaikan, atas perhatiannya
                    kami ucapkan terima kasih.</td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td style="width: 60%"><br>
                </td>
                <td>Padang Pariaman, <?= Yii::$app->formatter->asDate('now', 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>Kepala Stasiun,
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><?=$ttd1->pegawai->namapegawai?>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>Nip:<?=$ttd1->pegawai->nip?></td>
            </tr>
        </tbody>
    </table>
</div>