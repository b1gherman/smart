<?php

namespace backend\controllers;

use Yii;
use backend\models\Skpppindah;
use backend\models\SkpppindahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

/**
 * SkpppindahController implements the CRUD actions for Skpppindah model.
 */
class SkpppindahController extends Controller
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
     * Lists all Skpppindah models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SkpppindahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Skpppindah model.
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
     * Creates a new Skpppindah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Skpppindah();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Skpppindah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Skpppindah model.
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
     * Finds the Skpppindah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Skpppindah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Skpppindah::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSkpppindahgaji($id)
    {
        $this->redirect(['skpppindahgaji/create', 'id' => $id]);
    }

    public function actionSkpppindahbayarlain($id)
    {
        $this->redirect(['skpppindahbayarlain/create', 'id' => $id]);
    }

    public function actionSkpppindahutang($id)
    {
        $this->redirect(['skpppindahutang/create', 'id' => $id]);
    }

    public function actionSkppnonaktifsupplier()
    {
        $this->redirect(['skppnonaktifsupplier/index']);
    }

    public function actionReport($id)
    {
        // get your HTML raw content without any layouts or scripts

        $model = $this->findModel($id);
        $modelinstansi = \backend\models\Instansi::findOne(1);
        $modelskpppindahgaji = \backend\models\Skpppindahgaji::find()->where(['id_skpppindah' => $model->id])->asArray()->all();
        $modelskpppindahbayarlain = \backend\models\Skpppindahbayarlain::find()->where(['id_skpppindah' => $model->id])->asArray()->all();
        $modelskpppindahutang = \backend\models\Skpppindahutang::find()->where(['id_skpppindah' => $model->id])->asArray()->all();
        $modelpasanganpegawai = \backend\models\Pasangan::find()->where(['idpegawai' => $model->id_pegawai])->asArray()->all();
        $modelanakpegawai = \backend\models\Anakpegawai::find()->where(['id_pegawai' => $model->id_pegawai])->asArray()->all();


        $content = $this->renderPartial('_reportSkpppindah', [
            'model' => $model,
            'modelinstansi' => $modelinstansi,
            'modelskpppindahgaji' => $modelskpppindahgaji,
            'modelskpppindahbayarlain' => $modelskpppindahbayarlain,
            'modelskpppindahutang' => $modelskpppindahutang,
            'modelpasanganpegawai' => $modelpasanganpegawai,
            'modelanakpegawai' => $modelanakpegawai,
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
                'SetFooter' => ['{PAGENO}'],
            ],
            'marginTop' => 0,
            'marginRight' => 0,
            'marginLeft' => 0.
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();
    }
}
