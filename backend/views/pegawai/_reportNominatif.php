<table style="width: 100%;" border="0">
    <tbody>
        <tr>
            <td rowspan="3" style="width: 78.9933px;"><img src="<?php echo Yii::getAlias("@web") ?>/images/bmkg.png"

                                                           alt="" style="width: 79px; height: 98px;"><br>
            </td>
            <td style="text-align: center;font-weight: bold; height: 30.6667px;"><?= $instansi->satuanorganisasi ?><br>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-weight: bold; width: 1105.66px;">DAFTAR NOMINATIF
                PEGAWAI<br>
            </td>
            <td><br>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-weight: bold;">TAHUN <?= Yii::$app->formatter->asDate('now', 'yyyy') ?><br>
            </td>
            <td><br>
            </td>
        </tr>
    </tbody>
</table>
<br>
<table style="width: 100%;" border="0">
    <tbody>
        <tr>
            <td><br>
            </td>
            <td><br>
            </td>
        </tr>
        <tr>
            <td>Unit Organisasi</td>
            <td>: <?=$instansi->namainstansi?></td>
        </tr>
    </tbody>
</table>
<br>
<table style="width: 100%;" cellspacing="0" cellpadding="0" border="1">
    <tbody>
        <tr>
            <td style="text-align: center;">NO</td>
            <td style="text-align: center;">NAMA PEGAWAI</td>
            <td style="text-align: center;">NIP</td>
            <td style="text-align: center;">TEMPAT LAHIR</td>
            <td style="text-align: center;">TGL LAHIR</td>
            <td style="text-align: center;">JENIS KELAMIN</td>
            <td style="text-align: center;">GOL RUANG</td>
            <td style="text-align: center;">TMT GOL RUANG</td>
            <td style="text-align: center;">JABATAN</td>
            <td style="text-align: center;">TMT JABATAN</td>
            <td style="text-align: center;">PENDIDIKAN </td>
            <td style="text-align: center;">JURUSAN</td>
            <td style="text-align: center;">TAHUN LULUS</td>
        </tr>

        <tr>
            <td style="text-align: center;">1</td>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">4</td>
            <td style="text-align: center;">5</td>
            <td style="text-align: center;">6</td>
            <td style="text-align: center;">7</td>
            <td style="text-align: center;">8</td>
            <td style="text-align: center;">9</td>
            <td style="text-align: center;">10</td>
            <td style="text-align: center;">11</td>
            <td style="text-align: center;">12</td>
            <td style="text-align: center;">13</td>
        </tr>
        <?php
        $no=0;
        foreach ($struktural as $value):
            $no++;
            ?>
            <tr>
                <td style="text-align: center;"><?=$no?>
                </td>
                <td><?=$value['pegawai']['namapegawai'];?>
                </td>
                <td><?=$value['pegawai']['nip'];?>
                </td>
                <td><?=$value['pegawai']['tempatlahir'];?>
                </td>
                <td><?= Yii::$app->formatter->asDate($value['pegawai']['tgllahir'], 'dd-MM-yyyy') ;?>
                </td>
                <td><?=$value['pegawai']['jeniskelamin'];?>
                </td>
                <td><?=$value['pegawai']['golaktif']['golongan']['kode_gol'];?>
                </td>
                <td><?= Yii::$app->formatter->asDate($value['pegawai']['golaktif']['tmt'], 'dd-MM-yyyy') ;?>
                </td>
                <td><?=$value['pegawai']['jabatanaktif']['jabatan']['namajabatan'];?>
                </td>
                <td><?=$value['pegawai']['jabatanaktif']['tmt'];?>
                </td>
                <td><?=$value['pegawai']['pendidikanaktif']['tingkat']['kodetingkatan'];?>
                </td>
                <td><?=$value['pegawai']['pendidikanaktif']['jurusan']['namajurusan'];?>
                </td>
                <td><?=$value['pegawai']['pendidikanaktif']['tahunlulus'];?>
                </td>
            </tr>
            <?php
        endforeach;
        ?>
    </tbody>
</table>
<br>
<table style="width: 100%;" border="0">
    <tbody>
        <tr>
            <td style="width: 60%"><br>
            </td>
            <td style="text-align: center;"><?=$ttd1->jabatan->namajabatan?></td>
        </tr>
        <tr>
            <td><br>
            </td>
            <td style="text-align: center;"><br>
            </td>
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
            <td style="text-align: center;"><?=$ttd1->pegawai->namapegawai?></td>
        </tr>
        <tr>
            <td><br>
            </td>
            <td style="text-align: center;">NIP :<?=$ttd1->pegawai->nip?></td>
        </tr>
    </tbody>
</table>