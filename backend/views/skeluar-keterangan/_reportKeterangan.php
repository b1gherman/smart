<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr align="center">
                <td style="text-align: center"><b><?= $model->namasurat ?></b></td>
            </tr>
            <tr align="center">
                <td style="text-align: center"><b>Nomor : <?= $model->nomor ?></b></td>
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
                <td style="width: 22%; height: 0px;">Nama</td>
                <td style="width: 78%; height: 0px;">: <?= $model->idpemberi0->namapegawai ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 22%; height: 0px;">Nip</td>
                <td style="width: 78%; height: 0px;">: <?= $model->idpemberi0->nip ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 22%; height: 0px;">Pangkat / Golongan</td>
                <td style="width: 78%; height: 0px;">: <?= $modelgolonganpemberi->pangkat ?> / <?= $modelgolonganpemberi->kode_gol ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 22%; height: 0px;">Jabatan</td>
                <td style="width: 78%; height: 0px;">: <?= $modeljabatanpemberi->namajabatan ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 22%; height: 0px;">Unit Organisasi</td>
                <td style="width: 78%; height: 0px;">: <?= $modelinstansi->namainstansi ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 22%; height: 0px;">&nbsp;</td>
                <td style="width: 78%; height: 0px;">&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td style="width: 100%; text-align: justify;"><?= Yii::$app->formatter->asNtext($model->hal) ?></td>
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
                <td style="width: 22%; height: 0px;">Nama</td>
                <td style="width: 78%; height: 0px;">: <?= $model->idpenerima0->namapegawai ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 22%; height: 0px;">Nip</td>
                <td style="width: 78%; height: 0px;">: <?= $model->idpenerima0->nip ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 22%; height: 0px;">Pangkat / Golongan</td>
                <td style="width: 78%; height: 0px;">: <?= $modelgolonganpenerima->pangkat ?> / <?= $modelgolonganpenerima->kode_gol ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 22%; height: 0px;">Jabatan</td>
                <td style="width: 78%; height: 0px;">: <?= $modeljabatanpenerima->namajabatan ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 22%; height: 0px;">&nbsp;</td>
                <td style="width: 78%; height: 0px;">&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td style="width: 100%; text-align: justify;"><?= Yii::$app->formatter->asHtml($model->isi) ?></td>
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