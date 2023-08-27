<?php
namespace common\components;
//include 'Client/BasicRest.php';

class Esign extends \yii\base\Component
{
    public function init() {
        parent::init();
    }

    public function checkStatus($nik = '')
    {
        $rest = new BasicRest();
        $response = $rest->send('/api/user/status/' . $nik, 'GET');
        if (!$response) return $rest->getError();
        else return $response;
    }

    public function registrasi($nik = '')
    {
        $rest = new BasicRest();

        $data = array(
            'nik' => $nik,
            'nama' => 'agha-183602052019',
            'email' => 'agha.nugraha@bssn.go.id',
            'nomor_telepon' => '08971505626',
            'kota' => 'Jakarta',
            'provinsi' => 'DKI Jakarta',
            'nip' => '1234567890',
            'jabatan' => 'staff ahli',
            'unit_kerja' => 'Puskaji TI'
        );

        $files = array(
            'image_ttd' => $pdf,
            'ktp' => $pdf,
            'surat_rekomendasi' => $pdf
        );

        $response = $rest->send('/api/user/registrasi', 'POST', $data, $files);
        if (!$response) return $rest->getError();
        else return $response;
    }

    public function sign($nik = '', $pass = '', $pdf = '', $ttd = '')
    {
        $rest = new BasicRest();
        $ext = pathinfo($pdf, PATHINFO_EXTENSION);
        $filename = basename($pdf, '.' . $ext);
        $directoryName = realpath(dirname($pdf));

        $data = array(
            'nik' => $nik,
            'passphrase' => $pass,
            'tampilan' => 'invisible',
            'image' => 'false',
            'halaman' => 'PERTAMA',
            'xAxis' => '43.63',
            'yAxis' => '28.71',
            'width' => '550.78',
            'height' => '130.88',
            'linkQR' => 'tes',
            'text' => 'Dokumen ini ditandatangani secara elektronik'
        );

        $files = array(
            'file' => $pdf,
            'imageTTD' => $ttd
        );

        $response = $rest->send('/api/sign/pdf', 'POST', $data, $files);

        if (!$response) return $rest->getError();
        else {
            $header = $rest->getHeader();

            $file = $rest->send('/api/sign/download/' . $header['id_dokumen'][0], 'GET');
            $fp = fopen($directoryName . '/' . $filename . '_signed.pdf', 'wb');
            fwrite($fp, $file);
            fclose($fp);

            return 'Dokumen berhasil ditanda tangani';
        }
    }
}
