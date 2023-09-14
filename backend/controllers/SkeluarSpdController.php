<?php

namespace backend\controllers;

use Yii;
use backend\models\SkeluarSpd;
use backend\models\SkeluarSpdSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

/**
 * SkeluarSpdController implements the CRUD actions for SkeluarSpd model.
 */
class SkeluarSpdController extends Controller
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
     * Lists all SkeluarSpd models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SkeluarSpdSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SkeluarSpd model.
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
     * Creates a new SkeluarSpd model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SkeluarSpd();

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
     * Updates an existing SkeluarSpd model.
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
     * Deletes an existing SkeluarSpd model.
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
     * Finds the SkeluarSpd model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SkeluarSpd the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SkeluarSpd::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionPengikut($id) {
        $this->redirect(['skeluar-spd-pengikut/create', 'id' => $id]);
    }

    public function actionDeleteUpload() {

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $keys = Yii::$app->request->post('key');
        $key = explode(' ', $keys);

        $model = SkeluarSpd::find()->where([
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
        
        //pengirim//pemberi
        $modelppd = \backend\models\Pegawai::findOne(['id' => $model->idppd, 'aktif' => 1]);
        $modelgolppd = \backend\models\Golonganpegawai::findOne(['idpegawai' => $model->idppd, 'status' => 1]);
        $modelgolonganppd = \backend\models\Golongan::findOne(['id' => $modelgolppd->idgolongan]);
        $modeljabppd = \backend\models\Jabatanpegawai::findOne(['idpegawai' => $model->idppd, 'status' => 1]);
        $modeljabatanppd = \backend\models\Jabatan::findOne(['id' => $modeljabppd->idjabatan]);

        // $modelinstansi = \backend\models\Instansi::findOne(1);
        // $ttd1 = \backend\models\Jabatanstruktural::findOne($model->ttd);
        
        $content = $this->renderPartial('_reportSpd', [
            'model' => $model,
            'modelgolonganppd'=>$modelgolonganppd,
            'modeljabatanppd'=>$modeljabatanppd,
            // 'modelinstansi' => $modelinstansi,
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

    public function actionToword($id) {
        //return \Yii::$app->basePath;
        $model = $this->findModel($id);
        $modelgolppd = \backend\models\Golonganpegawai::findOne(['idpegawai' => $model->idppd, 'status' => 1]);
        $modelgolonganppd = \backend\models\Golongan::findOne(['id' => $modelgolppd->idgolongan]);
        $modeljabppd = \backend\models\Jabatanpegawai::findOne(['idpegawai' => $model->idppd, 'status' => 1]);
        $modeljabatanppd = \backend\models\Jabatan::findOne(['id' => $modeljabppd->idjabatan]);
        $modelsurattugas = \backend\models\SkeluarTugas::findOne(['id' => $model->idsurattugas]);
        
        // $template = "memo.docx";
        if (!isset($model->idtemplate0->file)) {
            \Yii::$app->session->setFlash("info", "File Template belum di set");
            return $this->redirect(['index']);
        }
        $template = $model->idtemplate0->file;
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(\Yii::$app->basePath . '/web/template/' . $template);

        // Variables on different parts of document
        //$templateProcessor->setValue('weekday', date('l')); // On section/content
        //$templateProcessor->setValue('time', date('H:i')); // On footer
        //$templateProcessor->setValue('serverName', realpath(__DIR__)); // On header
        // Simple table
        $templateProcessor->setValue('nomor', $model->nomor);
        $templateProcessor->setValue('gelardepanppk', $model->idppk0->gelar_depan);
        $templateProcessor->setValue('namappk', $model->idppk0->namapegawai);
        $templateProcessor->setValue('gelarbelakangppk', $model->idppk0->gelar_belakang);
        
        $templateProcessor->setValue('gelardepanppd', $model->idppd0->gelar_depan);
        $templateProcessor->setValue('namappd', $model->idppd0->namapegawai);
        $templateProcessor->setValue('gelarbelakangppd', $model->idppd0->gelar_belakang);
        $templateProcessor->setValue('nipppd', $model->idppd0->nip);
        $templateProcessor->setValue('pangkatppd', $modelgolonganppd->pangkat);
        $templateProcessor->setValue('golonganppd', $modelgolonganppd->kode_gol);
        $templateProcessor->setValue('jabatanppd', $modeljabatanppd->namajabatan);

        $templateProcessor->setValue('maksud', $modelsurattugas->tugas);
        $templateProcessor->setValue('alatangkut', $model->alat_angkut);
        $templateProcessor->setValue('tujuan', $modelsurattugas->lokasi);
        $templateProcessor->setValue('lama', $modelsurattugas->selama);
        $templateProcessor->setValue('tanggalberangkat', $modelsurattugas->tanggal_tugas);
        $templateProcessor->setValue('nomorsurattugas', $modelsurattugas->nomor);
        
        $filename = "naskahkeluar_spd_$model->id.docx";
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
