<?php

namespace backend\controllers;

use backend\models\SkeluarSpd;
use Yii;
use backend\models\SkeluarSpdPengikut;
use backend\models\SkeluarSpdPengikutSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkeluarSpdPengikutController implements the CRUD actions for SkeluarSpdPengikut model.
 */
class SkeluarSpdPengikutController extends Controller
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
     * Lists all SkeluarSpdPengikut models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SkeluarSpdPengikutSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SkeluarSpdPengikut model.
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
     * Creates a new SkeluarSpdPengikut model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

     public function actionCreate($id)
     {
         $spd = \backend\models\SkeluarSpd::findOne($id);
         $model = new SkeluarSpdPengikut();
         $model->tujuan = $spd->tujuan;
         $model->idspd = $id;
 
         if ($model->load(Yii::$app->request->post()) && $model->save()) {
             return $this->redirect(['view', 'id' => $model->id]);
         }
 
         return $this->render('create', [
             'model' => $model,
         ]);
     }

    // public function actionCreate()
    // {
    //     $model = new SkeluarSpdPengikut();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionCreateother($idspd)
    {
        $spd = \backend\models\SkeluarSpd::findOne($idspd);
        $model = new SkeluarSpdPengikut();
        // $model = $model::findOne($id);
        // echo '<pre>';
        // print_r($model);
        // exit;
        $model->tujuan = $spd->tujuan;
        $model->idspd = $idspd;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            // return $this->redirect(['skpp/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SkeluarSpdPengikut model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $spd = \backend\models\SkeluarSpd::findOne($model->idspd);
        // $spd = SkeluarSpd::findOne($model->idspd);
        // echo '<pre>';
        // print_r($spd);
        // exit;
        $model->tujuan = $spd->tujuan;
        $model->idspd = $spd->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SkeluarSpdPengikut model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        // return $this->redirect(['index']);
        return $this->redirect(['skeluar-spd/index']);
    }

    /**
     * Finds the SkeluarSpdPengikut model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SkeluarSpdPengikut the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SkeluarSpdPengikut::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
