<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td style="width: 11%;">Nomor</td>
                <td style="width: 2%;">:</td>
                <td style="width: 48%;"><?= $model->nomor ?></td>
                <td style="width: 34%;"><?= $model->tempat ?>, <?= Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td style="width: 11%;">Sifat</td>
                <td style="width: 2%;">:</td>
                <td style="width: 48%;"><?= $model->sifat ?></td>
                <td style="width: 34%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 11%;">Lampiran</td>
                <td style="width: 2%;">:</td>
                <td style="width: 48%;"><?= $model->lampiran ?></td>
                <td style="width: 34%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 11%; vertical-align: text-top;">Hal</td>
                <td style="width: 2%; vertical-align: text-top;">:</td>
                <td style="width: 48%;"><?= $model->hal ?></td>
                <td style="width: 34%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 11%;">&nbsp;</td>
                <td style="width: 2%;">&nbsp;</td>
                <td style="width: 48%;">&nbsp;</td>
                <td style="width: 34%;">&nbsp;</td>
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
                <td style="width: 100%; text-align: justify;" colspan="2"><?= Yii::$app->formatter->asHtml($model->kepada) ?></td>
            </tr>
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
                <td style="width: 30%;"><?php //= $modelpegawai->nip 
                                        ?></td>
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