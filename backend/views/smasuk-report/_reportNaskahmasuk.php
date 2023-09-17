<?php
$params = [':thn' => $periode];

$dtnaskahmasuk = Yii::$app->db->createCommand('SELECT * FROM smasuk_disposisi WHERE year(tanggal_terima)=:thn')
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
                        <td style="text-align: center"><b>DAFTAR REGISTRASI NASKAH MASUK</b></td>
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
                        <th scope="col" style="text-align: center; vertical-align: middle;">Tanggal Agenda</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Tujuan Surat</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Kode Klasifikasi (No. Agenda)</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Tanggal Surat</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Pencipta Arsip (instansi)</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Nomor Surat</th>
                        <th scope="col" style="text-align: center; vertical-align: middle;">Ringkasan Isi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($dtnaskahmasuk as $valnaskahmasuk) {
                        $no++;
                    ?>
                        <tr>
                            <td style="text-align: center;"><?= $no ?></td>
                            <td style="text-align: center;"><?= Yii::$app->formatter->asDate($valnaskahmasuk['tanggal_terima'], 'dd MMMM yyyy') ?></td>
                            <td style="text-align: center;">&nbsp;</td>
                            <td style="text-align: center;"><?= $valnaskahmasuk['nomor_agenda'] ?></td>
                            <td style="text-align: center;"><?= Yii::$app->formatter->asDate($valnaskahmasuk['tanggal'], 'dd MMMM yyyy') ?></td>
                            <td style="text-align: center;"><?= $valnaskahmasuk['asal_surat'] ?></td>
                            <td style="text-align: center;"><?= $valnaskahmasuk['nomor'] ?></td>
                            <td style="text-align: center;">&nbsp;</td>
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