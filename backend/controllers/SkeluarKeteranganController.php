<?php

namespace backend\controllers;

use Yii;
use backend\models\SkeluarKeterangan;
use backend\models\SkeluarKeteranganSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

/**
 * SkeluarKeteranganController implements the CRUD actions for SkeluarKeterangan model.
 */
class SkeluarKeteranganController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
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
     * Lists all SkeluarKeterangan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SkeluarKeteranganSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SkeluarKeterangan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SkeluarKeterangan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SkeluarKeterangan();

        if ($model->load(Yii::$app->request->post())) {
            $file = \yii\web\UploadedFile::getInstance($model, 'file_upload');
            if ($file) {
                $namafile = $file->name;
                if ($file->saveAs(Yii::getAlias('@backend') . '/web/naskahkeluar/' . $namafile)) {
                    $model->file_upload = $namafile;
                }
            }

            if ($model->save(false)) {
                // return $this->redirect(['index']);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id]);
        // }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SkeluarKeterangan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $filelama = $model->file_upload;
        if ($model->load(Yii::$app->request->post())) {
            $file = \yii\web\UploadedFile::getInstance($model, 'file_upload');
            if ($file) {
                $namafile = $file->name;
                if ($file->saveAs(Yii::getAlias('@backend') . '/web/naskahkeluar/' . $namafile)) {
                    $model->file_upload = $namafile;
                }
            } else {
                $model->file_upload = $filelama;
            }
            if ($model->save(false)) {
                // return $this->redirect(['index']);
                return $this->redirect(['view', 'id' => $model->id]);

            }
        }

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id]);
        // }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SkeluarKeterangan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SkeluarKeterangan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SkeluarKeterangan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SkeluarKeterangan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDeleteUpload() {

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $keys = Yii::$app->request->post('key');
        $key = explode(' ', $keys);

        $model = SkeluarKeterangan::find()->where([
                    'id' => $key[1],
                        //'create_id' => Yii::$app->user->id
                ])->one();

        if ($key[0] == 'file_upload') {
            @unlink(Yii::getAlias('@backend') . '/web/naskahkeluar/' . $model->file_upload);
            $model->file_upload = NULL;
            $model->save(false);
        }

        return [];
    }

    public function actionReport($id) {
        // get your HTML raw content without any layouts or scripts

        $model = $this->findModel($id);
        
        //pemberi
        $modelpemberi = \backend\models\Pegawai::findOne(['id' => $model->idpemberi, 'aktif' => 1]);
        $modelgolpemberi = \backend\models\Golonganpegawai::findOne(['idpegawai' => $model->idpemberi, 'status' => 1]);
        $modelgolonganpemberi = \backend\models\Golongan::findOne(['id' => $modelgolpemberi->idgolongan]);
        $modeljabpemberi = \backend\models\Jabatanpegawai::findOne(['idpegawai' => $model->idpemberi, 'status' => 1]);
        $modeljabatanpemberi = \backend\models\Jabatan::findOne(['id' => $modeljabpemberi->idjabatan]);

        //penerima
        $modelpenerima = \backend\models\Pegawai::findOne(['id' => $model->idpenerima, 'aktif' => 1]);
        $modelgolpenerima = \backend\models\Golonganpegawai::findOne(['idpegawai' => $model->idpenerima, 'status' => 1]);
        $modelgolonganpenerima = \backend\models\Golongan::findOne(['id' => $modelgolpenerima->idgolongan]);
        $modeljabpenerima = \backend\models\Jabatanpegawai::findOne(['idpegawai' => $model->idpenerima, 'status' => 1]);
        $modeljabatanpenerima = \backend\models\Jabatan::findOne(['id' => $modeljabpenerima->idjabatan]);

        $modelinstansi = \backend\models\Instansi::findOne(1);
        // $ttd1 = \backend\models\Jabatanstruktural::findOne($model->ttd);
        
        

        $content = $this->renderPartial('_reportKeterangan', [
            'model' => $model,
            'modelpemberi' => $modelpemberi,
            'modelgolonganpemberi'=>$modelgolonganpemberi,
            'modeljabatanpemberi'=>$modeljabatanpemberi,
            'modelpenerima' => $modelpenerima,
            'modelgolonganpenerima'=>$modelgolonganpenerima,
            'modeljabatanpenerima'=>$modeljabatanpenerima,
            'modelinstansi' => $modelinstansi,
            // 'ttd1'=>$ttd1
                // 'modelgolpeg' => $modelgolpeg,
                // 'modelgolongan' => $modelgolongan
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
            'marginTop' => 0,
            'marginLeft' => 0,
            'marginRight' => 0
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();
    }

    public function actionToword($id)
    {
        //return \Yii::$app->basePath;
        $model = $this->findModel($id);

        //pemberi
        $modelpemberi = \backend\models\Pegawai::findOne(['id' => $model->idpemberi, 'aktif' => 1]);
        $modelgolpemberi = \backend\models\Golonganpegawai::findOne(['idpegawai' => $model->idpemberi, 'status' => 1]);
        $modelgolonganpemberi = \backend\models\Golongan::findOne(['id' => $modelgolpemberi->idgolongan]);
        $modeljabpemberi = \backend\models\Jabatanpegawai::findOne(['idpegawai' => $model->idpemberi, 'status' => 1]);
        $modeljabatanpemberi = \backend\models\Jabatan::findOne(['id' => $modeljabpemberi->idjabatan]);

        //penerima
        $modelpenerima = \backend\models\Pegawai::findOne(['id' => $model->idpenerima, 'aktif' => 1]);
        $modelgolpenerima = \backend\models\Golonganpegawai::findOne(['idpegawai' => $model->idpenerima, 'status' => 1]);
        $modelgolonganpenerima = \backend\models\Golongan::findOne(['id' => $modelgolpenerima->idgolongan]);
        $modeljabpenerima = \backend\models\Jabatanpegawai::findOne(['idpegawai' => $model->idpenerima, 'status' => 1]);
        $modeljabatanpenerima = \backend\models\Jabatan::findOne(['id' => $modeljabpenerima->idjabatan]);

        // $modeljabpeg = \backend\models\Jabatanpegawai::findOne(['idjabatan' => $model->idpemberi, 'status' => 1]);
        // $modelpegawai = \backend\models\Pegawai::findOne(['id' => $modeljabpeg->idpegawai, 'aktif' => 1]);
        // $template = "memo.docx";
        $template = $model->idtemplate0->file;
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(\Yii::$app->basePath . '/web/template/' . $template);

        // Variables on different parts of document
        //$templateProcessor->setValue('weekday', date('l')); // On section/content
        //$templateProcessor->setValue('time', date('H:i')); // On footer
        //$templateProcessor->setValue('serverName', realpath(__DIR__)); // On header
        // Simple table
        $templateProcessor->setValue('nomor', $model->nomor);
        $templateProcessor->setValue('nama pemberi', $modelpemberi->namapegawai);
        $templateProcessor->setValue('nip pemberi', $modelpemberi->nip);
        $templateProcessor->setValue('pangkat pemberi', $modelgolonganpemberi->pangkat);
        $templateProcessor->setValue('golongan pemberi', $modelgolonganpemberi->kode_gol);
        $templateProcessor->setValue('jabatan pemberi', $modeljabatanpemberi->namajabatan);

        $templateProcessor->setValue('nama penerima', $modelpenerima->namapegawai);
        $templateProcessor->setValue('nip penerima', $modelpenerima->nip);
        $templateProcessor->setValue('pangkat penerima', $modelgolonganpenerima->pangkat);
        $templateProcessor->setValue('golongan penerima', $modelgolonganpenerima->kode_gol);
        $templateProcessor->setValue('jabatan penerima', $modeljabatanpenerima->namajabatan);
        
        
        $templateProcessor->setValue('tempat', $model->tempat);
        $templateProcessor->setValue('tanggal', Yii::$app->formatter->asDate($model->tanggal, 'dd MMMM yyyy'));
        
        $templateProcessor->setValue('nama jabatan', $modeljabatanpemberi->namajabatan);
        $templateProcessor->setValue('nama lengkap', $modelpemberi->namapegawai);

        $filename = "naskahkeluar_keterangan_$model->id.docx";
        $templateProcessor->saveAs(\Yii::$app->basePath . '/web/hasil/' . $filename);
        sleep(5);
        $path = Yii::getAlias('@webroot') . '/hasil/' . $filename;
        if (file_exists($path)) {
            \Yii::$app->response->sendFile($path);
            //return $this->redirect(['index']);
        }
        //\Yii::$app->session->setFlash("info", "File Tidak ada");
        //return $this->redirect(['index']);
        //return \Yii::$app->response->sendFile(\Yii::$app->basePath . '/web/hasil/' . $filename);
    }
}
