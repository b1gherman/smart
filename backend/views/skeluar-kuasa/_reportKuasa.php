<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr align="center">
                <td style="text-align: center"><b>SURAT KUASA</b></td>
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
                <td style="width: 100%; height: 0px;" colspan="3">Yang bertanda tangan di bawah ini selanjutnya disebut sebagai pihak pertama: </td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 100%; height: 0px;" colspan="3">&nbsp;</td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 18%; height: 0px;">Nama</td>
                <td style="width: 2%; height: 0px;">:</td>
                <td style="width: 80%; height: 0px;"><?= $model->idpemberi0->namapegawai ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 18%; height: 0px;">Jabatan</td>
                <td style="width: 2%; height: 0px;">:</td>
                <td style="width: 80%; height: 0px;"><?= $modeljabatanpemberi->namajabatan ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 18%; height: 0px; vertical-align: text-top;">Alamat</td>
                <td style="width: 2%; height: 0px; vertical-align: text-top;">:</td>
                <td style="width: 80%; height: 0px; vertical-align: text-top;"><?= $model->idpemberi0->alamat ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 18%; height: 0px;">Nomor telepon</td>
                <td style="width: 2%; height: 0px;">:</td>
                <td style="width: 80%; height: 0px;"><?= $model->idpemberi0->hp ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 18%; height: 0px;">&nbsp;</td>
                <td style="width: 2%; height: 0px;">&nbsp;</td>
                <td style="width: 80%; height: 0px;">&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td style="width: 100%; text-align: justify;">Memberikan kuasa kepada pihak kedua: </td>
            </tr>
            <tr>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr style="height: 0px;">
                <td style="width: 18%; height: 0px;">Nama</td>
                <td style="width: 2%; height: 0px;">:</td>
                <td style="width: 80% height: 0px;;"><?= $model->idpenerima0->namapegawai ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 18%; height: 0px;">Jabatan</td>
                <td style="width: 2%; height: 0px;">:</td>
                <td style="width: 80% height: 0px;;"><?= $modeljabatanpenerima->namajabatan ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 18%; height: 0px; vertical-align: text-top;">Alamat</td>
                <td style="width: 2%; height: 0px; vertical-align: text-top;">:</td>
                <td style="width: 80% height: 0px; vertical-align: text-top;"><?= $model->idpenerima0->alamat ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 18%; height: 0px;">Nomor telepon</td>
                <td style="width: 2%; height: 0px;">:</td>
                <td style="width: 80% height: 0px;;"><?= $model->idpenerima0->hp ?></td>
            </tr>
            <tr style="height: 0px;">
                <td style="width: 18%; height: 0px;">&nbsp;</td>
                <td style="width: 2%; height: 0px;">&nbsp;</td>
                <td style="width: 80%; height: 0px;">&nbsp;</td>
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
    <table style="width: 100%;" border="0">
        <tbody>
            <tr>
                <td style="width: 1.92678%;">&nbsp;</td>
                <td style="width: 54.0271%;">&nbsp;</td>
                <td style="width: 44.0462%;"><?= $model->tempat ?>, <?= Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td style="width: 1.92678%;">&nbsp;</td>
                <td style="width: 54.0271%;">Penerima Kuasa,</td>
                <td style="width: 44.0462%;">Pemberi Kuasa,</td>
            </tr>
            <tr>
                <td style="width: 1.92678%;">&nbsp;</td>
                <td style="width: 54.0271%;">&nbsp;</td>
                <td style="width: 44.0462%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 1.92678%;">&nbsp;</td>
                <td style="width: 54.0271%;">&nbsp;</td>
                <td style="width: 44.0462%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 1.92678%;">&nbsp;</td>
                <td style="width: 54.0271%;">&nbsp;</td>
                <td style="width: 44.0462%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 1.92678%;">&nbsp;</td>
                <td style="width: 54.0271%; text-decoration: underline;"><?= $model->idpenerima0->namapegawai ?></td>
                <td style="width: 44.0462%; text-decoration: underline;"><?= $model->idpemberi0->namapegawai ?></td>
            </tr>
            <tr>
                <td style="width: 1.92678%;">&nbsp;</td>
                <td style="width: 54.0271%;">NIP. <?= $model->idpenerima0->nip ?></td>
                <td style="width: 44.0462%;">NIP. <?= $model->idpemberi0->nip ?></td>
            </tr>
        </tbody>
    </table>
</div>