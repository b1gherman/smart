<img style="width: 100%" src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png">
<div style="padding-left: 95px;padding-right: 75px">
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td><br>
                </td>
            </tr>
            <tr align="center">
                <td style="text-align: center"><b>SURAT TUGAS</b></td>
            </tr>
            <tr align="center">
                <td style="text-align: center">Nomor : <?= $model->nomor ?></td>
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
                <td rowspan="1" colspan="2">Yang bertanda tangan dibawah ini :</td>
            </tr>
            <tr>
                <td style="width: 50%">Nama</td>
                <td>: <?= $model->pemberi->namapegawai ?></td>
            </tr>
            <tr>
                <td>Nip</td>
                <td>: <?= $model->pemberi->nip ?></td>
            </tr>
            <tr>
                <td>Pangkat/Golongan</td>
                <td>: 
                    <?php
                    if ($model->pemberi->golaktif != null) {
                        echo $model->pemberi->golaktif->golongan->pangkat . ' / ' . $model->pemberi->golaktif->golongan->kode_gol;
                    } else {
                        echo '-';
                    }
                    ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>: <?= ($model->pemberi->jabatanaktif == null) ? "-" : $model->pemberi->jabatanaktif->jabatan->namajabatan ?></td>
            </tr>
            <tr>
                <td>Unit Organisasi</td>
                <td>: <?= $modelinstansi->namainstansi ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td rowspan="1" colspan="2">Dengan ini memberi tugas kepada:</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?= $model->penerima->namapegawai ?></td>
            </tr>
            <tr>
                <td>Nip</td>
                <td>: <?= $model->penerima->nip ?></td>
            </tr>
            <tr>
                <td>Pangkat/gol</td>
                <td>: 
                    <?php
                    if ($model->penerima->golaktif != null) {
                        echo $model->penerima->golaktif->golongan->pangkat . ' / ' . $model->penerima->golaktif->golongan->kode_gol;
                    } else {
                        echo '-';
                    }
                    ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>: <?= ($model->penerima->jabatanaktif == null) ? '-' : $model->penerima->jabatanaktif->jabatan->namajabatan ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td rowspan="1" colspan="2">Untuk melaksanakan :</td>
            </tr>
            <tr>
                <td>Tugas</td>
                <td>: <?= $model->namatugas ?></td>
            </tr>
            <tr>
                <td>Selama</td>
                <td>: <?= $model->waktu . ' hari' ?></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>: <?= $model->lokasi ?></td>
            </tr>
            <tr>
                <td>Tanggal berangkat</td>
                <td>: <?= Yii::$app->formatter->asDate($model->daritgl, 'dd-MM-yyyy') . ' s/d ' . Yii::$app->formatter->asDate($model->sampaitgl, 'dd-MM-yyyy') ?></td>
            </tr>
            <tr>
                <td>Sumber dana</td>
                <td>: <?= $model->sumberdana ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
            <tr>
                <td rowspan="1" colspan="2"></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><br>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%" border="0">
        <tbody>
            <tr>
                <td style="width: 60%"><br>
                </td>
                <td>Padang Pariaman, <?= Yii::$app->formatter->asDate('now', 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td><?= (is_null($ttd1) ? '' : $ttd1->jabatan->namajabatan) ?></td>
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
                <td><br>
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
                <td><?= is_null($ttd1) ? '' : $ttd1->pegawai->namapegawai ?></td>
            </tr>
            <tr>
                <td><br>
                </td>
                <td>Nip. <?= is_null($ttd1) ? '' : $ttd1->pegawai->nip ?></td>
            </tr>
        </tbody>
    </table>
</div>