<?php

namespace backend\controllers;

use Yii;
use backend\models\Skppbayarlain;
// use backend\models\Skpp;
use backend\models\SkppbayarlainSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkppbayarlainController implements the CRUD actions for Skppbayarlain model.
 */
class SkppbayarlainController extends Controller
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
     * Lists all Skppbayarlain models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SkppbayarlainSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Skppbayarlain model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        // $modelskpp = \backend\models\Skpp::findOne($id);
        // //StartMyCode
        // $modelskpp->nomorskpp = $skpp->nomorskpp;
        // $modelskpp->id_skpp = $id;

        return $this->render('view', [
            'model' => $this->findModel($id),
            // 'modelskpp' => $modelskpp
        ]);
    }

    /**
     * Creates a new Skppbayarlain model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new Skppbayarlain();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionCreate($id)
    {
        $skpp = \backend\models\Skpp::findOne($id);
        $model = new Skppbayarlain();
        // $model = $model::findOne($id);
        // echo '<pre>';
        // print_r($model);
        // exit;
        $model->nomorskpp = $skpp->nomorskpp;
        $model->id_skpp = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            // return $this->redirect(['skpp/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionCreateother($id_skpp)
    {
        $skpp = \backend\models\Skpp::findOne($id_skpp);
        $model = new Skppbayarlain();
        // $model = $model::findOne($id);
        // echo '<pre>';
        // print_r($model);
        // exit;
        $model->nomorskpp = $skpp->nomorskpp;
        $model->id_skpp = $id_skpp;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            // return $this->redirect(['skpp/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Skppbayarlain model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $skpp = \backend\models\Skpp::findOne($model->id_skpp);
        // $skpp = Skpp::findOne($model->id_skpp);
        // echo '<pre>';
        // print_r($skpp);
        // exit;
        $model->nomorskpp = $skpp->nomorskpp;
        $model->id_skpp = $skpp->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Skppbayarlain model.
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
     * Finds the Skppbayarlain model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Skppbayarlain the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Skppbayarlain::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
