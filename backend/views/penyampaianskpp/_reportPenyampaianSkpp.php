<img src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png" style="width: 100%">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%;" border="0">
        <tbody>
            <tr>
                <td style="width: 15%;">Nomor</td>
                <td style="width: 45%;">: <?= $model->nomor_surat ?></td>
                <td>Padang Pariaman, <?= Yii::$app->formatter->asDate('now', 'dd MMMM yyyy'); ?></td>
            </tr>
            <tr>
                <td>Sifat</td>
                <td>: <?= $model->sifat ?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>: <?= $model->lampiran ?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>: <?= $model->hal ?>&nbsp;<?= $model->jenisskpp->namajenisskpp ?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;&nbsp;a/n. <?= $model->pegawai->namapegawai ?>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;" border="0">
        <tbody>
            <tr>
                <td colspan="3"><?= Yii::$app->formatter->asNtext($model->kepada) ?></td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <table style="width: 103.006%;" border="0">
        <tbody>
            <tr>
                <!-- <td style="text-align: justify;" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bersama ini kami sampaikan lampiran Surat Keterangan
                    Penghentian Pembayaran (SKPP) <?php //= $model->jenisskpp->namajenisskpp ?> beserta Surat Keputusan (SK) <?php //= $model->jenisskpp->namajenisskpp ?> Pegawai Negeri Sipil A.n
                    <strong><?php //= $model->pegawai->namapegawai ?></strong> NIP <?php //= $model->pegawai->nip ?> Pangkat / Golongan <?php //= $model->pegawai->golaktif->golongan->pangkat . ' / ' . $model->pegawai->golaktif->golongan->kode_gol; ?> Jabatan <?php //= $model->pegawai->jabatanaktif->jabatan->namajabatan; ?>
                </td> -->
                <td style="text-align: justify;" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bersama ini kami sampaikan lampiran Surat Keterangan
                    Penghentian Pembayaran (SKPP) <?= $model->jenisskpp->namajenisskpp ?> beserta Surat Keputusan (SK) <?= $model->jenisskpp->namajenisskpp ?> Pegawai Negeri Sipil A.n
                    <strong><?= $model->pegawai->namapegawai ?></strong> NIP <?= $model->pegawai->nip ?> Pangkat / Golongan <?= $model->pegawai->pangkat;?> / <?= $model->pegawai->golongan;?> Jabatan <?= $model->pegawai->jabatan;?>
                </td>
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="4">Demikian atas kerjasama Saudara disampaikan terimakasih.</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;" border="0">
        <tbody>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td>
                    <?php
                    if ($kepalastasiun != null) {
                        echo $kepalastasiun->jabatan->namajabatan;
                    }
                    ?>,
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <?php
                    if ($kepalastasiun != null) {
                        echo $kepalastasiun->pegawai->namapegawai;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Nip: <?php
                            if ($kepalastasiun != null) {
                                echo $kepalastasiun->pegawai->nip;
                            }
                            ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>