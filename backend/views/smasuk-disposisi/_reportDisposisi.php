<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr align="center">
                <td style="text-align: center"><b>LEMBAR DISPOSISI</b></td>
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
                <td style="width: 23%;">Nomor Agenda</td>
                <td style="width: 2%;">:</td>
                <td style="width: 75;"><?= $model->nomor_agenda ?></td>
            </tr>
            <tr>
                <td style="width: 23%;">Tanggal Penerimaan</td>
                <td style="width: 2%;">:</td>
                <td style="width: 75;"><?= Yii::$app->formatter->asDate($model->tanggal_terima, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td style="width: 23%;">Nomor Surat</td>
                <td style="width: 2%;">:</td>
                <td style="width: 75;"><?= $model->nomor ?></td>
            </tr>
            <tr>
                <td style="width: 23%;">Tanggal Surat</td>
                <td style="width: 2%;">:</td>
                <td style="width: 75;"><?= Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td style="width: 23%;">Asal Surat</td>
                <td style="width: 2%;">:</td>
                <td style="width: 75;"><?= $model->asal_surat ?></td>
            </tr>
            <tr>
                <td style="width: 23%;">Hal</td>
                <td style="width: 2%;">:</td>
                <td style="width: 75%; text-align: justify;"><?= Yii::$app->formatter->asNtext($model->hal) ?></td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="text-align: center;"><b>Diteruskan Kepada Yth :</b></td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;" border="0">
        <tbody>
            <?php
            $tempJab = $model->diteruskan;
            foreach ($tempJab as $valJab) {
            ?>
                <tr>
                    <td style="width: 25%;">&bull; <?= $valJab ?></td>
                    <td style="width: 25%;">2</td>
                    <td style="width: 25%;">3</td>
                    <td style="width: 25%;">4</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="text-align: center;"><b>Disposisi :</b></td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;" border="0">
        <tbody>

            <tr>
                <?php
                $tempketdis = $model->dataketdisposisi;
                foreach ($tempketdis as $valketdis) {
                ?>
                    <td style="text-align: center;">&bull; <?= $valketdis ?></td>
                <?php
                }
                ?>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;" border="0">
        <tbody>
            <?php
            $temppildis = $model->datapildisposisi;
            foreach ($temppildis as $valpildis) {
            ?>
                <tr>
                    <td>&bull; <?= $valpildis ?></td>
                    <td>2</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><b>Catatan Khusus :</b></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="text-align: justify;"><?= Yii::$app->formatter->asNtext($model->catatan) ?></td>
            </tr>
        </tbody>
    </table>
</div>