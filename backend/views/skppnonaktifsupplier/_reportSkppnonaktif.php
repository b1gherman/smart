<img src="<?php echo Yii::getAlias("@web") ?>/images/logobmkg.png" style="width: 100%">
<div style="padding-left: 95px;padding-right: 75px; width:100%">
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td colspan="4">
                    <table style="width: 100%;" border="0">
                        <tbody>
                            <tr>
                                <td style="width: 13%;">Nomor</td>
                                <td style="width: 2%;">:</td>
                                <td style="width: 45%;"><?= $model->nomor_surat ?></td>
                                <td style="width: 40%;">Padang Pariaman, <?= Yii::$app->formatter->asDate($model->tanggal_surat, 'dd MMMM yyyy') ?></td>
                            </tr>
                            <tr>
                                <td style="width: 13%;">Sifat</td>
                                <td style="width: 2%;">:</td>
                                <td style="width: 45%;"><?= $model->sifat ?></td>
                                <td style="width: 40%;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="width: 13%;">Lampiran</td>
                                <td style="width: 2%;">:</td>
                                <td style="width: 45%;"><?= $model->lampiran ?></td>
                                <td style="width: 40%;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="width: 13%;">Hal</td>
                                <td style="width: 2%;">:</td>
                                <td style="width: 45%;"><?php echo Yii::$app->formatter->asNtext($model->hal) ?></td>
                                <td style="width: 40%;">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 38.2766%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 100%;" colspan="4"><?php echo Yii::$app->formatter->asNtext($model->kepada) ?></td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 38.2766%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 100%; text-align: justify;" colspan="4">1. Dengan memperhatikan Peraturan Direktur Jenderal Perbendaharaan Nomor : <?= $model->no_dirjen_bendahara ?> tentang Pengelolaan Data Supplier dan Data Kontrak dalam Sistem Perbendaharaan dan Anggaran Negara, dengan ini kami mengajukan permintaan penonaktifan informasi rekening pegawai pada data Supplier *) :</td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp; a) Nama Supplier</td>
                <td style="width: 2.00401%;">:</td>
                <td style="width: 56.51299%;" colspan="2"><?= $model->instansi->kodesatuan . " (" . $model->instansi->satuanorganisasi . ")" ?></td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp; b) Nomor Register Supplier (NRS)</td>
                <td style="width: 2.00401%;">:</td>
                <td style="width: 56.51299%;" colspan="2"><?= $model->no_register_supplier ?></td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 38.2766%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 100%;" colspan="4">2. Identitas rekening pegawai yang dinonaktifkan adalah sebagai berikut :</td>
            </tr>
            <tr>
                <td style="width: 100%; height: 100%;" colspan="4">
                    <table style="width: 100%;" border="1" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td style="width: 6.27451%; height: 35px; text-align: center;" rowspan="2">No</td>
                                <td style="width: 93.7255%; height: 17px; text-align: center;" colspan="4">Data Pegawai yang dinonaktifkan</td>
                            </tr>
                            <tr>
                                <td style="width: 24.5491%; height: 18px; text-align: center;">Nama</td>
                                <td style="width: 24.745%; height: 18px; text-align: center;">NIP</td>
                                <td style="width: 24.353%; height: 18px; text-align: center;">Nama Bank</td>
                                <td style="width: 22.0784%; height: 18px; text-align: center;">Nomor Rekening</td>
                            </tr>
                            <tr>
                                <td style="width: 6.27451%; height: 18px;">1</td>
                                <td style="width: 24.5491%; height: 18px;"><?= $model->pegawai->namapegawai ?></td>
                                <td style="width: 24.745%; height: 18px;"><?= $model->pegawai->nip ?></td>
                                <td style="width: 24.353%; height: 18px;"><?= $model->nama_bank ?></td>
                                <td style="width: 22.0784%; height: 18px;"><?= $model->no_rekening ?></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 38.2766%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 100%; text-align: justify;" colspan="4">3. Alasan permintaan penonaktifan informasi rekening pegawai tersebut di atas adalah : yang bersangkutan <?= $model->jenisskpp->namajenisskpp ?> sesuai surat keputusan dari KEPALA BMKG nomor : <?= $model->sk->nosk ?> tanggal <?= Yii::$app->formatter->asDate($model->sk->tgl, 'dd MMMM yyyy') ?></td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 38.2766%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 100%; text-align: justify;" colspan="4">4. Apabila di kemudian hari terdapat konsekuensi atas data yang kami sampaikan, maka kami menyatakan siap menanggung segala akibat dan tanggung jawab yang ditimbulkan oleh data yang kami sampaikan.</td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 38.2766%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 100%;" colspan="4">5. Demikian atas kerjasama Saudara disampaikan terima kasih.</td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 38.2766%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 42.2345%;">Kuasa Pengguna Anggaran.</td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 42.2345%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 42.2345%;">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 42.2345%;"><?= $model->pegawaiKpa->namapegawai ?></td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 42.2345%;">NIP : <?= $model->pegawaiKpa->nip ?></td>
            </tr>
            <tr>
                <td style="width: 41.483%;">&nbsp;</td>
                <td style="width: 2.00401%;">&nbsp;</td>
                <td style="width: 18.0361%;">&nbsp;</td>
                <td style="width: 42.2345%;">&nbsp;</td>
            </tr>
        </tbody>
    </table>
</div>