<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
<table style="width: 100%;" border="0">
        <tbody>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;"><?= $model->tempat ?>, <?= Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
            <td style="width: 100%; text-align: justify;"><?= Yii::$app->formatter->asHtml($model->kepada) ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr align="center">
                <td style="text-align: center; text-decoration: underline; " ><b>SURAT PENGANTAR</b></td>
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
                <td style="width: 1%;">&nbsp;</td>
                <td style="width: 69%;">Diterima Tanggal :</td>
                <td style="width: 30%;"><?= $modeljabatanpengirim->namajabatan ?></td>
            </tr>
            <tr>
                <td style="width: 1%;">&nbsp;</td>
                <td style="width: 69%;">Diterima Oleh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td style="width: 30%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 1%;">&nbsp;</td>
                <td style="width: 69%;">&nbsp;</td>
                <td style="width: 30%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 1%;">&nbsp;</td>
                <td style="width: 69%;">&nbsp;</td>
                <td style="width: 30%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 1%;">&nbsp;</td>
                <td style="width: 69%;">&nbsp;</td>
                <td style="width: 30%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 1%;">&nbsp;</td>
                <td style="width: 69%; text-decoration: underline;">____________________</td>
                <td style="width: 30%;"><?= $model->idpengirim0->namapegawai ?></td>
            </tr>
            <tr>
                <td style="width: 1%;">&nbsp;</td>
                <td style="width: 69%;">NIP.</td>
                <td style="width: 30%;">&nbsp;</td>
            </tr>
        </tbody>
    </table>
</div>