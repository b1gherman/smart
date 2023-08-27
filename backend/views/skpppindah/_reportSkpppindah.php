<?php
$datajabkepala = Yii::$app->bmkg->getJabatanKepala();
?>
<!-- <img src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png" style="width: 100%"> -->
<div style="padding-top: 75px;padding-bottom: 75px;padding-left: 95px;padding-right: 75px; width:100%">
    <table style="border-collapse: collapse; width: 100%; height: 100%;" border="1">
        <tbody>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">SATKER</td>
                <td style="text-align: center; height: 18px; width: 42.4818%;" colspan="2" rowspan="2"><strong>&nbsp;</strong><br /><strong>SURAT KETERANGAN PENGHENTIAN PEMBAYARAN (PINDAH/MUTASI)</strong><br /><strong><br /></strong><strong><br /></strong></td>
                <td style="width: 31.1331%; height: 18px;">Nomor : <?= $model->nomorskpp ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">
                    <?= $modelinstansi->namainstansi. ' ('.$modelinstansi->kodesatuan.')'; ?>
                </td>
                <td style="width: 31.1331%; height: 18px;">Lamp : <?= $model->lampiran ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 98.9774%; height: 18px;" colspan="4">Kuasa Pengguna Anggaran/Kepala Stasiun Klimatologi Padang Pariaman, menerangkan bahwa :</td>
            </tr>
            <tr style="height: 18px; background-color: #dbdad5;">
                <td style="width: 98.9774%; height: 13px;" colspan="4"><strong>IDENTITAS PEGAWAI</strong></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Nama Pegawai</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->pegawai->namapegawai
                                                                        ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">NIP</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->pegawai->nip
                                                                        ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Tempat Lahir</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->pegawai->tempatlahir ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Tanggal Lahir</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= Yii::$app->formatter->asDate($model->pegawai->tgllahir, 'dd-MM-yyyy') ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Golongan / Pangkat</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2">
                    <?php
                    $datagol = Yii::$app->bmkg->getGolPegAktif($model->id_pegawai);
                    if ($datagol != false) {
                        echo $datagol['kode_gol'] . " / " . $datagol['pangkat'];
                    }
                    ?>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Jabatan</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2">
                    <?php
                    $datajab = Yii::$app->bmkg->getJabPegAktif($model->id_pegawai);
                    if ($datajab != false) {
                        echo $datajab['namajabatan'];
                    }
                    ?>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Satker &amp; Kode Satker</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $modelinstansi->satuanorganisasi ?> (<?= $modelinstansi->kodesatuan ?>)</td>
            </tr>
            <tr style="height: 18px; background-color: #dbdad5;">
                <td style="width: 98.9774%; height: 18px;" colspan="4"><strong>BERDASARKAN SURAT KEPUTUSAN</strong></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">SK Dari&nbsp;</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->sk->pejabat ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Tanggal SK</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= Yii::$app->formatter->asDate($model->sk->tgl, 'dd-MM-yyyy') ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Nomor SK</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->sk->nosk ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Dipindahkan sebagai</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->pindah_sebagai ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Jabatan</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->jabatan->namajabatan ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 25.3625%; height: 18px;">Satker & Kode Satker</td>
                <td style="width: 2.00401%; height: 18px;">:</td>
                <td style="width: 71.6109%; height: 18px;" colspan="2"><?= $model->satuankerja->namasatuankerja ." (". $model->satuankerja->kodesatuan .")"  ?></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 98.9774%; height: 18px;" colspan="4"><strong>SAMPAI DENGAN BULAN <?= strtoupper(Yii::$app->formatter->asDate($model->tanggal_surat, 'MMMM yyyy')) ?> TELAH DIBAYARKAN GAJI DENGAN RINCIAN :</strong></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 98.9774%; height: 18px;" colspan="4">
                    <table style="width: 100%;" border="0">
                        <tbody>
                            <tr>
                                <td style="width: 49%; vertical-align:text-top;">
                                    <table style="border-collapse: collapse; width: 100%; height: 54px;" border="1">
                                        <tbody>
                                            <tr style="height: 18px; background-color: #dbdad5;">
                                                <td style="width: 100%; height: 18px; text-align: center;" colspan="3"><strong>PENGHASILAN</strong></td>
                                            </tr>
                                            <?php
                                            $jumlahpenghasilan = 0;
                                            foreach ($modelskpppindahgaji as $value1) :
                                                $id = $value1['id_komponengaji'];
                                                $komponengaji = backend\models\Komponengaji::findOne(['id' => $value1['id_komponengaji'], 'kelompok' => 'Penghasilan']);
                                                if ($komponengaji != null) {
                                            ?>
                                                    <tr style="height: 18px;">
                                                        <td style="width: 55%; height: 18px;"><?php echo $komponengaji['namakomponen']; ?></td>
                                                        <td style="width: 5%; height: 18px;">:</td>
                                                        <td style="width: 40%; height: 18px; text-align: right;"><?= Yii::$app->formatter->asCurrency($value1['jumlah']) ?></td>
                                                    </tr>
                                                    <?php
                                                    $jumlahpenghasilan = $jumlahpenghasilan + $value1['jumlah'];
                                                    ?>
                                            <?php }
                                            endforeach; ?>
                                            <tr>
                                                <td style="width: 55%;"><strong>Jumlah Kotor</strong></td>
                                                <td style="width: 4%;">:</td>
                                                <td style="width: 40%; text-align: right;"><strong><?= Yii::$app->formatter->asCurrency($jumlahpenghasilan) ?></strong></td>
                                            </tr>
                                            <!-- <tr style="height: 18px;">
                                            <td style="width: 55%; height: 18px;">&nbsp;</td>
                                            <td style="width: 5%; height: 18px;">&nbsp;</td>
                                            <td style="width: 40%; height: 18px;">&nbsp;</td>
                                        </tr> -->
                                        </tbody>
                                    </table>
                                </td>
                                <td style="width: 2%;">&nbsp;</td>
                                <td style="width: 49%; vertical-align:text-top;">
                                    <table style="border-collapse: collapse; width: 100%;" border="1">
                                        <tbody>
                                            <tr>
                                                <td style="width: 99.9999%; text-align: center; background-color: #dbdad5;" colspan="3"><strong>POTONGAN</strong></td>
                                            </tr>
                                            <?php
                                            $jumlahpotongan = 0;
                                            foreach ($modelskpppindahgaji as $value2) :
                                                $komponengaji = backend\models\Komponengaji::findOne(['id' => $value2['id_komponengaji'], 'kelompok' => 'Potongan']);
                                                if ($komponengaji != null) {
                                            ?>
                                                    <tr>
                                                        <td style="width: 55%;"><?= $komponengaji['namakomponen'] ?></td>
                                                        <td style="width: 5%;">:</td>
                                                        <td style="width: 40%; text-align: right;"><?= Yii::$app->formatter->asCurrency($value2['jumlah']) ?></td>
                                                    </tr>
                                                    <?php
                                                    $jumlahpotongan = $jumlahpotongan + $value2['jumlah'];
                                                    ?>
                                            <?php }
                                            endforeach; ?>
                                            <tr>
                                                <td style="width: 55%;"><strong>Jumlah Pot.</strong></td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 40%; text-align: right;"><strong><?= Yii::$app->formatter->asCurrency($jumlahpotongan) ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 55%;"><strong>Jumlah Bersih</strong></td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 40%; text-align: right;"><strong><?php echo Yii::$app->formatter->asCurrency($jumlahpenghasilan - $jumlahpotongan) ?></strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 98.9774%; height: 18px;" colspan="4">
                    <table style="border-collapse: collapse; width: 100%;" border="0">
                        <tbody>
                            <tr>
                                <td style="width: 100%;">
                                    <table style="border-collapse: collapse; width: 100%; height: 35px;" border="1">
                                        <tbody>
                                            <tr style="height: 17px; background-color: #dbdad5;">
                                                <td style="width: 100%; height: 17px;" colspan="3"><strong>PEMBAYARAN LAINNYA</strong></td>
                                            </tr>
                                            <?php
                                            foreach ($modelskpppindahbayarlain as $value3) :
                                            ?>
                                                <tr style="height: 18px;">
                                                    <td style="width: 40%; height: 18px;"><?= $value3['keterangan'] ?></td>
                                                    <td style="width: 2%; height: 18px;">:</td>
                                                    <td style="width: 58%; height: 18px;"><?= $value3['subketerangan'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 98.9774%; height: 18px;" colspan="4">
                    <table style="border-collapse: collapse; width: 100%;" border="0">
                        <tbody>
                            <tr>
                                <td style="width: 100%;">
                                    <table style="border-collapse: collapse; width: 100%; height: 54px;" border="1">
                                        <tbody>
                                            <tr style="height: 18px; background-color: #dbdad5;">
                                                <td style="width: 100%; height: 18px; text-align: center; " colspan="4"><strong>UTANG-UTANG KEPADA NEGARA</strong></td>
                                            </tr>
                                            <tr style="height: 18px; background-color: #dbdad5;">
                                                <td style="width: 30.2941%; height: 18px; text-align: center;">URAIAN POTONGAN</td>
                                                <td style="width: 19.7059%; height: 18px; text-align: center;">JUMLAH</td>
                                                <td style="width: 25%; height: 18px; text-align: center;">POTONGAN</td>
                                                <td style="width: 25%; height: 18px; text-align: center;">AKUN PENERIMAAN</td>
                                            </tr>
                                            <?php
                                            foreach ($modelskpppindahutang as $value4) :
                                            ?>
                                                <tr style="height: 18px;">
                                                    <td style="width: 30.2941%; height: 18px;"><?= $value4['uraianpotongan'] ?></td>
                                                    <td style="width: 19.7059%; height: 18px; text-align: right;"><?= Yii::$app->formatter->asCurrency($value4['jumlah']) ?></td>
                                                    <td style="width: 25%; height: 18px; text-align: right;"><?= Yii::$app->formatter->asCurrency($value4['potongan']) ?></td>
                                                    <td style="width: 25%; height: 18px;"><?= $value4['akunpenerimaan'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 98.9774%; height: 18px;" colspan="4">
                    <table style="border-collapse: collapse; width: 100%;" border="0">
                        <tbody>
                            <tr>
                                <td style="width: 100%;">
                                    <table style="border-collapse: collapse; width: 100%;" border="1">
                                        <tbody>
                                            <tr style="background-color: #dbdad5;">
                                                <td style="width: 100%; text-align: center;"><strong>ANGGOTA KELUARGA YANG TIDAK MEMPUNYAI PENGHASILAN SENDIRI<br />DAN MENJADI TANGGUNGAN SEPENUHNYA DARI PEGAWAI TERSEBUT</strong></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100%;">
                                                    <table style="border-collapse: collapse; width: 100%;" border="1">
                                                        <tbody>
                                                            <tr style="background-color: #dbdad5;">
                                                                <td style="width: 25%; text-align: center;">NAMA</td>
                                                                <td style="width: 25%; text-align: center;">HUB. KELUARGA</td>
                                                                <td style="width: 25%; text-align: center;">TANGGAL LAHIR</td>
                                                                <td style="width: 25%; text-align: center;">TERTANGGUNG</td>
                                                            </tr>
                                                            <?php
                                                            foreach ($modelpasanganpegawai as $value5) :
                                                            ?>
                                                                <tr>
                                                                    <td style="width: 25%;"><?= $value5['nama'] ?></td>
                                                                    <td style="width: 25%; text-align: center;">Istri/Suami</td>
                                                                    <td style="width: 25%; text-align: center;"><?= Yii::$app->formatter->asDate($value5['tgllahir'], 'dd-MM-yyyy')  ?></td>
                                                                    <td style="width: 25%;">&nbsp;</td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                            <?php
                                                            foreach ($modelanakpegawai as $value6) :
                                                                $statusanak = backend\models\Statusanak::findOne(['id' => $value6['idstatusanak']]);
                                                                // if ($komponengaji != null) {
                                                            ?>
                                                                <tr>
                                                                    <td style="width: 25%;"><?= $value6['namaanak'] ?></td>
                                                                    <td style="width: 25%; text-align: center;"><?= $statusanak['status'] ?></td>
                                                                    <td style="width: 25%; text-align: center;"><?= Yii::$app->formatter->asDate($value6['tgl_lahir'], 'dd-MM-yyyy')  ?></td>
                                                                    <td style="width: 25%;">&nbsp;</td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                            <td style="width: 100%;">&nbsp;</td>
                                        </tr> -->
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 98.9774%; height: 18px;" colspan="4">
                    <table style="border-collapse: collapse; width: 100%;" border="1">
                        <tbody>
                            <tr>
                                <td style="width: 40%;vertical-align: text-top"><?php echo Yii::$app->formatter->asNtext($model->tembusan) ?></td>
                                <td style="width: 60%;">
                                    <table style="border-collapse: collapse; width: 100%; height: 375px;" border="0">
                                        <tbody>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">Padang Pariaman, <?= Yii::$app->formatter->asDate($model->tanggal_surat, 'dd MMMM yyyy') ?></td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">
                                                    <?php
                                                    echo $datajabkepala['namajabatan'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">&nbsp;</td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">&nbsp;</td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">
                                                    <span style="text-decoration: underline;">
                                                        <?php
                                                        echo $datajabkepala['namapegawai'];
                                                        ?>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">NIP :
                                                    <?php
                                                    echo $datajabkepala['nip'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">&nbsp;</td>
                                            </tr>
                                            <tr style="height: 72px;">
                                                <td style="width: 100%; text-align: justify; height: 72px;"><strong>Data pegawai yang bersangkutan telah dinonaktifkan dari database KPPN Padang</strong></td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">&nbsp;</td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">Mengetahui:</td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;"><?= $model->jabatan_mengetahui ?></td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">&nbsp;</td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">&nbsp;</td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;"><?= $model->nama_mengetahui ?></td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">NIP : <?= $model->nip_mengetahui ?></td>
                                            </tr>
                                            <tr style="height: 18px;">
                                                <td style="width: 100%; height: 18px;">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 98.9774%; height: 18px;" colspan="4">&nbsp;</td>
            </tr>
        </tbody>
    </table>
</div>