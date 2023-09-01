<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr align="center">
                <td style="text-align: center"><b>SURAT TUGAS</b></td>
            </tr>
            <tr align="center">
                <td style="text-align: center"><b>NOMOR : <?= $model->nomor ?></b></td>
            </tr>
            <tr>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%; height: 108px;" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr style="height: 0px;">
                <td style="width: 100%; height: 0px;" colspan="2">Yang bertandatangan di bawah ini :</td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 100%; height: 0px;" colspan="2">&nbsp;</td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 23%; height: 0px;">Nama</td>
                <td style="width: 77%; height: 0px;">: <?= $model->idpemberi0->namapegawai ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 23%; height: 0px;">Nip</td>
                <td style="width: 77%; height: 0px;">: <?= $model->idpemberi0->nip ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 23%; height: 0px;">Pangkat / Golongan</td>
                <td style="width: 77%; height: 0px;">: <?= $modelgolonganpemberi->pangkat ?> / <?= $modelgolonganpemberi->kode_gol ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 23%; height: 0px;">Jabatan</td>
                <td style="width: 77%; height: 0px;">: <?= $modeljabatanpemberi->namajabatan ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 23%; height: 0px;">Unit Organisasi</td>
                <td style="width: 77%; height: 0px;">: <?= $modelinstansi->namainstansi ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 23%; height: 0px;">&nbsp;</td>
                <td style="width: 77%; height: 0px;">&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td>Dengan ini memberikan tugas kepada :</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 100%; text-align: justify;"><?= Yii::$app->formatter->asHtml($model->penerima) ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%; height: 108px;" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr style="height: 0px;">
                <td style="width: 100%; height: 0px;" colspan="2">Untuk Melaksanakan : </td>
                <!-- <td style="width: 85%; height: 0px;">&nbsp;</td> -->
            </tr>
            <tr style="height: 0px;">
                <td style="width: 100%; height: 0px;" colspan="2">&nbsp;</td>
                <!-- <td style="width: 85%; height: 0px;">&nbsp;</td> -->
            </tr>
            <tr style="height: 0px;">
                <td style="width: 10%; height: 0px; vertical-align: text-top;">Tugas</td>
                <td style="width: 90%; height: 0px; text-align: justify;">: <?= $model->tugas ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 10%; height: 0px;">Tanggal</td>
                <td style="width: 90%; height: 0px;">: <?= $model->tanggal_tugas ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 10%; height: 0px;">Selama</td>
                <td style="width: 90%; height: 0px;">: <?= $model->selama ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 10%; height: 0px; vertical-align: text-top;">Lokasi</td>
                <td style="width: 90%; height: 0px; text-align: justify;">: <?= $model->lokasi ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 10%; height: 0px;">&nbsp;</td>
                <td style="width: 90%; height: 0px;">&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td style="width: 100%; text-align: justify;"><?= Yii::$app->formatter->asHtml($model->keterangan) ?></td>
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
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;"><?= $model->tempat ?>, <?= Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;"><?= $modeljabatanpemberi->namajabatan ?></td>
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
                <td style="width: 40%;"><?= $model->idpemberi0->namapegawai ?></td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;"><?php //= $modelpegawai->nip 
                                        ?></td>
            </tr>
        </tbody>
    </table>
</div>