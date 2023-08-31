<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr align="center">
                <td style="text-align: center"><b>NOTA DINAS</b></td>
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
    <table style="width: 100%;" border="0">
        <tbody>
            <tr>
                <td style="width: 13%;">Yth.</td>
                <td style="width: 87%;">: <?= $model->idkepada0->namajabatan ?></td>
            </tr>
            <tr>
                <td style="width: 13%;">Dari</td>
                <td style="width: 87%;">: <?= $model->iddari0->namajabatan ?></td>
            </tr>
            <tr>
                <td style="width: 13%;">Hal</td>
                <td style="width: 87%;">: <?= $model->hal ?></td>
            </tr>
            <tr>
                <td style="width: 13%;">Tanggal</td>
                <td style="width: 87%;">: <?= Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM yyyy') ?></td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td style="width: 100%; text-align: justify;" colspan="2"><?= Yii::$app->formatter->asHtml($model->isi) ?></td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;" border="0">
        <tbody>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="width: 30%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="width: 30%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="width: 30%;"><?= $model->idttd0->namajabatan ?></td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="width: 30%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="width: 30%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="width: 30%;"><?= $modelpegawai->namapegawai ?></td>
            </tr>
            <tr>
                <td style="width: 70%;">&nbsp;</td>
                <td style="width: 30%;"><?php //= $modelpegawai->nip ?></td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><?= Yii::$app->formatter->asNtext($model->tembusan) ?></td>
            </tr>
        </tbody>
    </table>
</div>