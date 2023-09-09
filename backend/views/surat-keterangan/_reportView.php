<img src="<?php echo Yii::getAlias("@web") ?>/surat/header.jpg"  style="width: 100%;height:130px;">
<br/>
<table style="width: 100%;border: 0;">
    <tbody>
        <tr>
            <td style="text-align: center;"><strong>SURAT KETERANGAN</strong></td>
        </tr>
        <tr>
            <td style="text-align: center;">Nomor :<?=$model->kode;?></td>
        </tr>
    </tbody>
</table>

<br/>
<table border="0">
    <tbody>
        <tr>
            <td>Yang bertanda tangan di bawah ini,</td>
        </tr>
    </tbody>
</table>

<table border="0">
    <tbody>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=$model->ttd->nama;?></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td><?=$model->ttd->nip;?></td>
        </tr>
        <tr>
            <td>Pangkat/Golongan</td>
            <td>:</td>
            <td><?=$model->ttd->golongan->pangkat?>/<?=$model->ttd->golongan->golongan?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?=$model->ttd->jabatan->jabatan;?></td>
        </tr>
    </tbody>
</table>
<br/>
<table border="0">
    <tbody>
        <tr>
            <td>Dengan ini menerangkan bahwa,</td>
        </tr>
    </tbody>
</table>

<table border="0">
    <tbody>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=$model->terangkan->nama;?></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td><?=$model->terangkan->nip;?></td>
        </tr>
        <tr>
            <td>Pangkat/Golongan</td>
            <td>:</td>
            <td><?=$model->terangkan->golongan->pangkat?>/<?=$model->terangkan->golongan->golongan?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?=$model->terangkan->jabatan->jabatan;?></td>
        </tr>
    </tbody>
</table>
<br/>
<?= $model->isi; ?>
<br/>
<table style="text-align: left; width: 100%;" border="0" cellpadding="0"
       cellspacing="0">
    <tbody>
        <tr>
            <td style="vertical-align: top; width: 70%"><br>
            </td>
            <td style="vertical-align: top; width: 30%;">Padang, <?= Yii::$app->formatter->asDate($model->tanggal,'dd MMMM yyyy');?><br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 70%"><br>
            </td>
            <td style="vertical-align: top; width: 30%;"><?=$model->ttd->jabatan->jabatan;?><br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top;"><br>
            </td>
            <td style="vertical-align: top;"><br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top;"><br>
            </td>
            <td style="vertical-align: top;"><br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top;"><br>
            </td>
            <td style="vertical-align: top;"><br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top;"><br>
            </td>
            <td style="vertical-align: top;"><?=$model->ttd->nama?><br>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top;"><br>
            </td>
            <td style="vertical-align: top;"><?=$model->ttd->nip?><br>
            </td>
        </tr>
    </tbody>
</table>
<br/>
<table border="0">
    <tbody>
        <tr>
            <td>Tembusan:</td>
        </tr>
        <?php
            $temp = $model->tembusan;
            $no=0;
            foreach ($temp as $val) {
               $no++;
        ?>
        <tr>
            <td>(<?=$no;?>)&nbsp;<?=$val?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>



