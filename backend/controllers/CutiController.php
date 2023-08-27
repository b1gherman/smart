<?php

namespace backend\controllers;

use Yii;
use backend\models\Cuti;
use backend\models\CutiSearch;
use backend\models\Instansi;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

/**
 * CutiController implements the CRUD actions for Cuti model.
 */
class CutiController extends Controller {

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
     * Lists all Cuti models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new CutiSearch();
        if (Yii::$app->session->get('pegawai') != null) {
            $peg = Yii::$app->session->get('pegawai');
            $searchModel->id_pegawai = $peg->id;
        }
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cuti model.
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
     * Creates a new Cuti model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Cuti();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cuti model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cuti model.
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
     * Finds the Cuti model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cuti the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Cuti::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSetuju($id) {
        $cuti = Cuti::findOne([$id]);
        $cuti->status = 'DISETUJUI';
        if ($cuti->save(false)) {
            return $this->redirect(['index']);
        }
    }
    
    public function actionSetuju1($id) {
        $cuti = Cuti::findOne([$id]);
        $cuti->status1 = 'DISETUJUI';
        if ($cuti->save(false)) {
            return $this->redirect(['index']);
        }
    }

    public function actionRubah($id) {
        $cuti = Cuti::findOne([$id]);
        $cuti->status = 'PERUBAHAN';
        if ($cuti->save(false)) {
            return $this->redirect(['index']);
        }
    }
    
    public function actionRubah1($id) {
        $cuti = Cuti::findOne([$id]);
        $cuti->status1 = 'PERUBAHAN';
        if ($cuti->save(false)) {
            return $this->redirect(['index']);
        }
    }

    public function actionTangguh($id) {
        $cuti = Cuti::findOne([$id]);
        $cuti->status = 'DITANGGUHKAN';
        if ($cuti->save(false)) {
            return $this->redirect(['index']);
        }
    }
    
    public function actionTangguh1($id) {
        $cuti = Cuti::findOne([$id]);
        $cuti->status1 = 'DITANGGUHKAN';
        if ($cuti->save(false)) {
            return $this->redirect(['index']);
        }
    }

    public function actionNosetuju($id) {
        $cuti = Cuti::findOne([$id]);
        $cuti->status = 'TIDAK DISETUJUI';
        if ($cuti->save(false)) {
            return $this->redirect(['index']);
        }
    }
    
    public function actionNosetuju1($id) {
        $cuti = Cuti::findOne([$id]);
        $cuti->status1 = 'TIDAK DISETUJUI';
        if ($cuti->save(false)) {
            return $this->redirect(['index']);
        }
    }

    public function actionReport($id) {
        // get your HTML raw content without any layouts or scripts

        $model = $this->findModel($id);
        $modelinstansi = \backend\models\Instansi::findOne(1);
        $ttd1 = null;
        if ($model->ttd1 != null) {
            $ttd1 = \backend\models\Jabatanstruktural::findOne($model->ttd1);
        }
        //Golongan
        // $modelgolpeg = \backend\models\Golonganpegawai::findOne(['idpegawai' => $model->id_pegawai, 'status' => 1]);
        // $modelgolongan = \backend\models\Golongan::findOne(['id' => $modelgolpeg->idgolongan]);

        $content = $this->renderPartial('_reportView', [
            'model' => $model,
            'modelinstansi' => $modelinstansi,
            'ttd1' => $ttd1,
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

    public function actionFormulir($id) {
        // get your HTML raw content without any layouts or scripts

        $model = $this->findModel($id);
        $ttd1 = \backend\models\Jabatanstruktural::findOne($model->ttd1);
        $ttd2 = \backend\models\Jabatanstruktural::findOne($model->ttd2);
        $modelinstansi = \backend\models\Instansi::findOne(1);
        $tahun = date('Y');
        $cutitahuns = \backend\models\Batascuti::find()->where(['>=', 'tahun', $tahun - 2])->andWhere(['<=', 'tahun', $tahun])->andWhere(['idpegawai' => $model->id_pegawai])->all();
        $jeniscuti = \backend\models\Jeniscuti::find()->where(['>', 'id', 1])->all();

        //Golongan
        // $modelgolpeg = \backend\models\Golonganpegawai::findOne(['idpegawai' => $model->id_pegawai, 'status' => 1]);
        // $modelgolongan = \backend\models\Golongan::findOne(['id' => $modelgolpeg->idgolongan]);

        $content = $this->renderPartial('_formulirCuti', [
            'model' => $model,
            'modelinstansi' => $modelinstansi,
            'ttd1' => $ttd1,
            'ttd2' => $ttd2,
            'cutitahuns' => $cutitahuns,
            'jeniscuti' => $jeniscuti

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
            'marginTop' => 5,
                //'marginLeft' => 0,
                //'marginRight' => 0
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();
    }

    public function actionTes() {
        $jum = $this->getJumlahCutiArray(15);
        $sisa = $this->getJumlahCuti($jum);
        print_r($sisa);
        //print_r($sisa);
    }

    public function getJumlahCutiArray($idpegawai) {
        $year = array();
        $jumlah = array();
        $tangguh = array();
        $yearNow = date('Y');
        for ($i = $yearNow - 2; $i < $yearNow; $i++) {
            $year[] = ['tahun' => $i];
        }
        foreach ($year as $key => $value) {
            $data = $this->getJumlahPakaiCutiTahun($idpegawai, $value['tahun']);
            $year[$key] += $data;
        }

        return $year;
    }

    public function getJumlahPakaiCutiTahun($idpegawai, $tahun) {
        $sql = "SELECT digunakan,sisa,tangguhkan FROM batascuti WHERE idpegawai=$idpegawai and tahun=$tahun";
        $data = Yii::$app->db->createCommand($sql)->queryOne();
        return $data;
    }

    public function getJumlahCuti($sisa = array()) {
        $max = 12;
        $min = 6;
        $hasil = 0;
        if ($sisa[0]['sisa'] == 12 && $sisa[1]['sisa'] == 12) {
            if ($sisa[1]['tangguhkan'] > 0) {
                $hasil = 6 + $sisa[1]['tangguhkan'] + 12;
            } else {
                $hasil = 6 + 6 + 12;
            }
        } elseif ($sisa[1]['sisa'] < $min) {
            if ($sisa[1]['tangguhkan'] > 0) {
                $hasil = 0 + $sisa[1]['tangguhkan'] + 12;
            } else {
                $hasil = 0 + $sisa[1]['sisa'] + 12;
            }
        } elseif ($sisa[1]['sisa'] >= $min) {
            if ($sisa[1]['tangguhkan'] > 0) {
                $hasil = 0 + $sisa[1]['tangguhkan'] + 12;
            } else {
                $hasil = 0 + $min + 12;
            }
        }
        return $hasil;
    }

    public function getSisaAkhir($sisa = array(), $jumlahambil) {
        $sisaawal = [
            $sisa[0]['sisa'],
            $sisa[1]['sisa'],
            12
        ];
        $sisaakhir = array();
        $max = 12;
        $min = 6;
        $hasil = 0;
        if ($sisa[0]['sisa'] == 12 && $sisa[1]['sisa'] == 12) {
            if ($sisa[1]['tangguhkan'] > 0) {
                $hasil = 6 + $sisa[1]['tangguhkan'] + 12;
            } else {
                $hasil = 6 + 6 + 12;
            }
            if (jumlahambil == $hasil) {
                $sisaakhir[0] = 0;
                $sisaakhir[1] = 0;
                $sisaakhir[2] = 0;
            } else {
                $t = 0;
                $t = $jumlahambil - $sisaawal[0];
                if ($t >= 0) {
                    $sisaakhir[0] = 0;
                    $t = $t - $sisaawal[1];
                    if ($t >= 0) {
                        $sisaakhir[1] = 0;
                    } else {
                        $sisaakhir[1] = $sisaawal[1] - ($t + $sisaawal[1]);
                    }
                } else {
                    $sisaakhir[0] = $sisaawal[0] - ($t + $sisaawal[0]);
                }
            }
        } elseif ($sisa[1]['sisa'] < $min) {
            if ($sisa[1]['tangguhkan'] > 0) {
                $hasil = 0 + $sisa[1]['tangguhkan'] + 12;
            } else {
                $hasil = 0 + $sisa[1]['sisa'] + 12;
            }
            if (jumlahambil == $hasil) {
                
            }
        } elseif ($sisa[1]['sisa'] >= $min) {
            if ($sisa[1]['tangguhkan'] > 0) {
                $hasil = 0 + $sisa[1]['tangguhkan'] + 12;
            } else {
                $hasil = 0 + $min + 12;
            }
        }
        return $hasil;
    }

}
