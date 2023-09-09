<?php

namespace backend\controllers;

use Yii;
use backend\models\SkeluarPenerimatugas;
use backend\models\SkeluarPenerimatugasSearch;
use backend\models\SkeluarTugas;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkeluarPenerimatugasController implements the CRUD actions for SkeluarPenerimatugas model.
 */
class SkeluarPenerimatugasController extends Controller
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
     * Lists all SkeluarPenerimatugas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SkeluarPenerimatugasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SkeluarPenerimatugas model.
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
     * Creates a new SkeluarPenerimatugas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

     public function actionCreate($id)
     {
         $datatugas = \backend\models\SkeluarTugas::findOne($id);
         $model = new SkeluarPenerimatugas();
         // $model = $model::findOne($id);
        // echo '<pre>';
        // print_r($model);
        // exit;
         $model->tugas = $datatugas->tugas;
         $model->idtugas = $id;
 
         if ($model->load(Yii::$app->request->post()) && $model->save()) {
             return $this->redirect(['view', 'id' => $model->id]);
         }
 
         return $this->render('create', [
             'model' => $model,
         ]);
     }

    // public function actionCreate()
    // {
    //     $model = new SkeluarPenerimatugas();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionCreateother($idtugas)
    {
        $datatugas = \backend\models\SkeluarTugas::findOne($idtugas);
        $model = new SkeluarPenerimatugas();
        $model->tugas = $datatugas->tugas;
        $model->idtugas = $idtugas;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            // return $this->redirect(['skpp/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SkeluarPenerimatugas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $datatugas = \backend\models\SkeluarTugas::findOne($model->idtugas);
        // $datatugas = SkeluarTugas::findOne($model->idtugas);
        // echo '<pre>';
        // print_r($datatugas);
        // exit;
        $model->tugas = $datatugas->tugas;
        $model->idtugas = $datatugas->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SkeluarPenerimatugas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        // return $this->redirect(['index']);
        return $this->redirect(['skeluar-tugas/index']);
    }

    /**
     * Finds the SkeluarPenerimatugas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SkeluarPenerimatugas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SkeluarPenerimatugas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
