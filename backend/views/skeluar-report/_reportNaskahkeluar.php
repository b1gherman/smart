<?php
$params = [':thn' => $periode];

$dtnaskahkeluar = Yii::$app->db->createCommand('SELECT * FROM vrekapnaskahkeluar WHERE year(tanggalsurat)=:thn')
    // ->queryAll();
    ->bindValues($params)
    ->queryAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>DAFTAR REGISTRASI NASKAH MASUK</title> -->
</head>

<body>
    <div class="container">
        <img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
        <div style="padding-left: 15px;padding-right: 15px; orientation: landscape;">
            <table style="width: 100%" border="0">
                <tbody>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                    <tr align="center">
                        <td style="text-align: center"><b>DAFTAR REGISTRASI NASKAH KELUAR</b></td>
                    </tr>
                    <tr align="center">
                        <td style="text-align: center"><b>STASIUN GEOFISKA KELAS I PADANG PANJANG</b></td>
                    </tr>
                    <tr align="center">
                        <td style="text-align: center"><b>TAHUN <?php echo $periode; ?></b></td>
                    </tr>
                    <tr>
                        <td><br>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="text-align: center; vertical-align: middle;">No</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Tanggal</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Tujuan Surat</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Nomor Surat</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Tanggal Surat</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Pencipta Arsip (instansi)</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Ringkasan Isi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($dtnaskahkeluar as $valnaskahkeluar) {
                        $no++;
                    ?>
                        <tr>
                            <td style="text-align: center;"><?= $no ?></td>
                            <td style="text-align: center;">&nbsp;</td>
                            <td style="text-align: center;">&nbsp;</td>
                            <td style="text-align: center;"><?= $valnaskahkeluar['nomorsurat'] ?></td>
                            <td style="text-align: center;"><?= Yii::$app->formatter->asDate($valnaskahkeluar['tanggalsurat'], 'dd MMMM yyyy') ?></td>
                            <td style="text-align: center;"><?= $valnaskahkeluar['iddari'] ?></td>
                            <td style="text-align: center;"><?= $valnaskahkeluar['ringkasanisi'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>