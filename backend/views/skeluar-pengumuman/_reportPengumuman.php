<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr align="center">
                <td style="text-align: center"><b>PENGUMUMAN</b></td>
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
            <td style="width: 100%; text-align: justify;"><?= Yii::$app->formatter->asHtml($model->tentang) ?></td>
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
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">Ditetapkan di : <?= $model->tempat ?></td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;"><?= $modeljabatanpembuat->namajabatan ?></td>
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
                <td style="width: 40%;"><?= $model->idpembuat0->namapegawai ?></td>
            </tr>
            <tr>
                <td style="width: 60%;">&nbsp;</td>
                <td style="width: 40%;"><?php //= $modelpegawai->nip 
                                        ?></td>
            </tr>
        </tbody>
    </table>
</div>