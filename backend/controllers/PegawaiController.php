<?php

namespace backend\controllers;

use Yii;
use backend\models\Pegawai;
use backend\models\PegawaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use kartik\mpdf\Pdf;

/**
 * PegawaiController implements the CRUD actions for Pegawai model.
 */
class PegawaiController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pegawai models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new PegawaiSearch();
        if (Yii::$app->session->get('pegawai') != null) {
            $peg = Yii::$app->session->get('pegawai');
            $searchModel->id = $peg->id;
        }
        $searchModel->aktif = 1;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pegawai model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Pegawai();

        if ($model->load(Yii::$app->request->post())) {
            $file = \yii\web\UploadedFile::getInstance($model, 'foto');
            if ($file) {
                $namafile = $file->name;
                if ($file->saveAs(Yii::getAlias('@backend') . '/web/foto/' . $namafile)) {
                    $model->foto = $namafile;
                }
            }
            if ($model->save(false)) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $fotolama = $model->foto;
        if ($model->load(Yii::$app->request->post())) {
            $file = \yii\web\UploadedFile::getInstance($model, 'foto');
            if ($file) {
                $namafile = $file->name;
                if ($file->saveAs(Yii::getAlias('@backend') . '/web/foto/' . $namafile)) {
                    $model->foto = $namafile;
                }
            } else {
                $model->foto = $fotolama;
            }
            if ($model->save(false)) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Pegawai::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGolongan($id) {
        $this->redirect(['golonganpegawai/create', 'id' => $id]);
    }

    public function actionPendidikan($id) {
        $this->redirect(['riwayatpendidikan/create', 'id' => $id]);
    }

    public function actionDiklat($id) {
        $this->redirect(['diklat/create', 'id' => $id]);
    }

    public function actionJabatan($id) {
        $this->redirect(['jabatanpegawai/create', 'id' => $id]);
    }

    public function actionPasangan($id) {
        $this->redirect(['pasangan/create', 'id' => $id]);
    }

    public function actionAnak($id) {
        $this->redirect(['anakpegawai/create', 'id' => $id]);
    }

    public function actionKerja($id) {
        $this->redirect(['riwayatkerja/create', 'id' => $id]);
    }

    public function actionDokumen($id) {
        $this->redirect(['sk/create', 'id' => $id]);
    }

    public function actionTes() {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx;
        $spreadsheet = $reader->load("05featuredemo.xls");

// Uncomment following rows if you want to set col width:
//$sheet->getColumnDimension('A')->setAutoSize(false);
//$sheet->getColumnDimension('A')->setWidth("50");

        $sheet->setCellValue('A1', 'Hello World !');

        $writer = new Xlsx($spreadsheet);

// You can save the file on the server:
// $writer->save('hello_world.xlsx'); 
// Or you can send the file directly to the browser so user can download it:
// header('Content-Type: application/vnd.ms-excel'); // This is probably for older XLS files.
        header('Content-Type: application/application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // This is for XLSX files (they are basically zip files).
        header('Content-Disposition: attachment;filename="filename.xlsx"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit();
    }

    public function actionDeleteUpload() {

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $keys = Yii::$app->request->post('key');
        $key = explode(' ', $keys);

        $model = Pegawai::find()->where([
                    'id' => $key[1],
                        //'create_id' => Yii::$app->user->id
                ])->one();

        if ($key[0] == 'foto') {
            @unlink(Yii::getAlias('@backend') . '/web/foto/' . $model->foto);
            $model->foto = NULL;
            $model->save(false);
        }

        return [];
    }

    public function actionReportriwayatkerja($id) {
        // get your HTML raw content without any layouts or scripts

        $model = $this->findModel($id);
        $pendidikan = \backend\models\Riwayatpendidikan::findAll(['idpegawai' => $id]);
        $riwayatkerja = \backend\models\Riwayatkerja::findAll(['idpegawai' => $id]);
        //Golongan
        // $modelgolpeg = \backend\models\Golonganpegawai::findOne(['idpegawai' => $model->id_pegawai, 'status' => 1]);
        // $modelgolongan = \backend\models\Golongan::findOne(['id' => $modelgolpeg->idgolongan]);

        $content = $this->renderPartial('_reportRiwayatKerja', [
            'model' => $model,
            'pendidikan' => $pendidikan,
            'riwayatkerja' => $riwayatkerja
        ]);

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting 
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}',
            // set mPDF properties on the fly
            'options' => ['title' => 'Krajee Report Title'],
            // call mPDF methods on the fly
            'methods' => [
            //'SetHeader' => ['Barang Keluar'],
            //'SetFooter' => ['{PAGENO}'],
            ],
            'marginTop' => 10,
                //'marginLeft' => 0,
                //'marginRight' => 0,
        ]);
        // return the pdf output as per the destination setting
        return $pdf->render();
    }

    public function actionReportnominatif() {
        // get your HTML raw content without any layouts or scripts

        $struktural = \backend\models\Jabatanstruktural::find()->where(['status' => 1])->orderBy('urutan')->all();
        $instansi = \backend\models\Instansi::findOne(['status' => '1']);
        $ttd1 = \backend\models\Jabatanstruktural::findOne(['idjabatan' => 1, 'urutan' => 1]);

        //Golongan
        // $modelgolpeg = \backend\models\Golonganpegawai::findOne(['idpegawai' => $model->id_pegawai, 'status' => 1]);
        // $modelgolongan = \backend\models\Golongan::findOne(['id' => $modelgolpeg->idgolongan]);

        $content = $this->renderPartial('_reportNominatif', [
            'struktural' => $struktural,
            'instansi' => $instansi,
            'ttd1' => $ttd1
        ]);

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_LANDSCAPE,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting 
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}',
            // set mPDF properties on the fly
            'options' => ['title' => 'Krajee Report Title'],
            // call mPDF methods on the fly
            'methods' => [
            //'SetHeader' => ['Barang Keluar'],
            //'SetFooter' => ['{PAGENO}'],
            ],
            'marginTop' => 10,
            'marginLeft' => 10,
            'marginRight' => 10
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();
    }

    public function actionNonaktif($id) {
        $model = $this->findModel($id);
        $model->aktif = 0;
        if ($model->save(false)) {
            Yii::$app->session->setFlash('info', 'Non Aktif Ok');
        };
        $this->redirect(['index']);
    }

}
