<table style="width: 100%" cellpadding="0" cellspacing="0" border="0">
    <tbody>
        <tr align="center">
            <td style="text-align: center">BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</td>
        </tr>
        <tr align="center">
            <td style="text-align: center">DAFTAR URUT KEPANGKATAN (DUK)</td>
        </tr>
        <tr align="center">
            <td style="text-align: center">TAHUN 2022</td>
        </tr>
    </tbody>
</table>
<table style="width: 100%" cellpadding="0" cellspacing="0" border="0">
    <tbody>
        <tr>
            <td><br>
            </td>
        </tr>
        <tr>
            <td>UNIT ORGANISASI : <?=$instansi->namainstansi?></td>
        </tr>
        <tr>
            <td><br>
            </td>
        </tr>
    </tbody>
</table>
<table style="width: 100%" cellpadding="0" cellspacing="0" border="1">
    <tbody>
        <tr>
            <td style="text-align: center;">NO</td>
            <td style="text-align: center;">NAMA</td>
            <td style="text-align: center;">NIP</td>
            <td rowspan="1" colspan="2" style="text-align: center;">PANGKAT</td>
            <td rowspan="1" colspan="2" style="text-align: center;">JABATAN</td>
            <td rowspan="1" colspan="2" style="text-align: center;">MASA KERJA
                KESELURUHAN</td>
            <td rowspan="1" colspan="3" style="text-align: center;">DIKLAT
                PERJENJANGAN</td>
            <td rowspan="1" colspan="3" style="text-align: center;">PENDIDIKAN
                TERAKHIR</td>
            <td rowspan="2" colspan="1" style="text-align: center;">TEMPAT/TANGGAL
                LAHIR</td>
            <td rowspan="2" colspan="1" style="text-align: center;">CATATAN MUTASI KEPEGAWAIAN</td>
            <td rowspan="2" colspan="1" style="text-align: center;">KET.</td>
        </tr>
        <tr>
            <td><br>
            </td>
            <td><br>
            </td>
            <td><br>
            </td>
            <td style="text-align: center;">GOL. RUANG</td>
            <td style="text-align: center;">TMT</td>
            <td style="text-align: center;">NAMA</td>
            <td style="text-align: center;">TMT</td>
            <td style="text-align: center;">TAHUN</td>
            <td style="text-align: center;">BULAN</td>
            <td style="text-align: center;">NAMA</td>
            <td style="text-align: center;">BLN &amp;TAHUN</td>
            <td style="text-align: center;">JLH JAM</td>
            <td style="text-align: center;">JURUSAN </td>
            <td style="text-align: center;">LULUS THN</td>
            <td style="text-align: center;">TK.IJAZAH</td>
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
            <td style="text-align: center;">14</td>
            <td style="text-align: center;">15</td>
            <td style="text-align: center;">16</td>
            <td style="text-align: center;">17</td>
            <td style="text-align: center;">18</td>
        </tr>
        <?php
        $no=0;
        foreach ($model as $value):
            $no++;
            $tmasa = Yii::$app->sikerma->getTahunBulan($value['pegawai']['tglcpns']);
            ?>
            <tr>
                <td style="text-align: center;"><?=$no?></td>
                <td style="text-align: center;"><?= $value['pegawai']['namapegawai'] ?></td>
                <td style="text-align: center;"><?= $value['pegawai']['nip'] ?></td>
                <td style="text-align: center;"><?= $value['pegawai']['golaktif']['golongan']['kode_gol'] ?><br>
                </td>
                <td style="text-align: center;"><?= Yii::$app->formatter->asDate($value['pegawai']['golaktif']['tmt'], 'dd-MM-yyyy')  ?><br>
                </td>
                <td style="text-align: center;"><?= $value['pegawai']['jabatanaktif']['jabatan']['namajabatan'] ?><br>
                </td>
                <td style="text-align: center;"><?= Yii::$app->formatter->asDate($value['pegawai']['jabatanaktif']['tmt'],'dd-MM-yyyy') ?><br>
                </td>
                <td style="text-align: center;"><?=$tmasa['tahun']?><br>
                </td>
                <td style="text-align: center;"><?=$tmasa['bulan']?><br>
                </td>
                <td style="text-align: center;"><?=($value['pegawai']['diklataktif']==null?'':$value['pegawai']['diklataktif']['namadiklat'])?><br>
                </td>
                <td style="text-align: center;"><?=($value['pegawai']['diklataktif']==null?'':$value['pegawai']['diklataktif']['tahun'])?><br>
                </td>
                <td style="text-align: center;"><?=($value['pegawai']['diklataktif']==null?'':$value['pegawai']['diklataktif']['jumlahjam'])?><br>
                </td>
                <td style="text-align: center;"><?=$value['pegawai']['pendidikanaktif']['jurusan']['namajurusan']?><br>
                </td>
                <td style="text-align: center;"><?=$value['pegawai']['pendidikanaktif']['tahunlulus']?><br>
                </td>
                <td style="text-align: center;"><?=$value['pegawai']['pendidikanaktif']['tingkat']['kodetingkatan']?><br>
                </td>
                <td style="text-align: center;"><?= $value['pegawai']['tempatlahir']." / ".  Yii::$app->formatter->asDate($value['pegawai']['tgllahir'],'dd-MM-yyyy') ?><br>
                </td>
                <td>-<br>
                </td>
                <td>-<br>
                </td>
            </tr>
            <?php
        endforeach;
        ?>
    </tbody>
</table>