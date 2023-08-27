<?php
//$jumlahharicuti = Yii::$app->inventori->kurangTanggal($model->tglakhircuti, $model->tglmulaicuti);
$jumlahhurufcuti = Yii::$app->bmkg->terbilang($model->lama);
$datajabkepala = Yii::$app->bmkg->getJabatanKepala();
?>
<img src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png" style="width: 100%">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="border-collapse: collapse; width: 100%;" border="0">
        <tbody>
            <tr style="height: 18px;">
                <td style="height: 18px;" colspan="5"></td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;" colspan="5">&nbsp;</td>
            </tr>
            <tr style="height: 20px;">
                <td style="text-align: center; height: 20px;" colspan="5"><strong>SURAT IZIN <?= strtoupper($model->jeniscuti->namajeniscuti) ?></strong></td>
            </tr>
            <tr style="height: 18px;">
                <td style="text-align: center; height: 18px;" colspan="5">Nomor : <?= $model->nomor ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;" colspan="5">&nbsp;</td>
            </tr>
            <tr style="height: 36px;">
                <td style="vertical-align: top; height: 36px;">1.</td>
                <td style="vertical-align: top;" colspan="4">Diberikan izin sementara untuk melaksanakan <?= $model->jeniscuti->namajeniscuti ?> kepada: </td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;padding-left: 20px">Nama</td>
                <td style="height: 18px;">:</td>
                <td style="height: 18px;" colspan="2"><?= $model->pegawai->namapegawai ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;padding-left: 20px">NIP</td>
                <td style="height: 18px;">:</td>
                <td style="height: 18px;" colspan="2"><?= $model->pegawai->nip ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;padding-left: 20px">Pangkat / Gol</td>
                <td style="height: 18px;">:</td>
                <td style="height: 18px;" colspan="2">
                    <?php
                    $datagol = Yii::$app->bmkg->getGolPegAktif($model->id_pegawai);
                    echo $datagol['pangkat'] . " / " . $datagol['kode_gol'];
                    ?>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;padding-left: 20px">Jabatan&nbsp;</td>
                <td style="height: 18px;">:</td>
                <td style="height: 18px;" colspan="2">
                    <?php
                    $datajab = Yii::$app->bmkg->getJabPegAktif($model->id_pegawai);
                    echo $datajab['namajabatan'];
                    ?>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;padding-left: 20px">Unit Kerja</td>
                <td style="height: 18px;">:</td>
                <td style="height: 18px;" colspan="2"><?= $modelinstansi->namainstansi; ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
            </tr>
            <tr style="height: 18px;">
                <td></td>
                <td style="height: 18px; text-align: justify;" colspan="4">Selama <?= $model->lama ?> (<?= $jumlahhurufcuti ?>) hari kerja, terhitung mulai tanggal <?= Yii::$app->formatter->asDate($model->tglmulaicuti, 'dd-MM-yyyy') ?> sampai dengan <?= Yii::$app->formatter->asDate($model->tglakhircuti, 'dd-MM-yyyy') ?> dengan ketentuan sebagai berikut :</td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px; text-align: justify;" colspan="4">
                    <table border="0">
                        <tbody>
                            <tr>
                                <td style="vertical-align: top">a.</td>
                                <td style="vertical-align: top">Sebelum menjalankan <?= $model->jeniscuti->namajeniscuti ?> wajib menyerahkan pekerjaannya kepada atasan langsungnya atau pejabat lain yang ditunjuk;</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top">b.</td>
                                <td style="vertical-align: top">Setelah menjalankan <?= $model->jeniscuti->namajeniscuti ?> wajib melaporkan diri kepada Atasan langsungnya dan bekerja kembali sebagaimana mestinya.</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
            </tr>
            <tr style="height: 36px;">
                <td style="vertical-align: top">2.</td>
                <td style="vertical-align: top; height: 36px; text-align: justify;" colspan="4">Demikian izin sementara melaksanakan <?= $model->jeniscuti->namajeniscuti ?> dibuat untuk dapat dipergunakan sebagaimana mestinya.</td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">Padang Pariaman, <?= Yii::$app->formatter->asDate($model->tanggal_surat, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">
                    <?php
                    if($ttd1!=null){
                        echo $ttd1->jabatan->namajabatan;
                    }
                    ?>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
            </tr>
            <tr>
                <td style="" colspan="5">&nbsp;</td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">
                    <?php
                    if($ttd1!=null){
                        echo $ttd1->pegawai->namapegawai;
                    }
                    ?>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">NIP :
                    <?php
                    if($ttd1!=null){
                        echo $ttd1->pegawai->nip;
                    }
                    ?>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
                <td style="height: 18px;">&nbsp;</td>
            </tr>
            <tr>
                <td style="" colspan="5">Tembusan :</td>
            </tr>
            <tr style="height: 18px;">
                <td style="height: 18px;" colspan="5">
                    <?php //= $model->tembusan 
                    ?>
                    <?php echo Yii::$app->formatter->asNtext($model->tembusan) ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
