<?php

namespace backend\controllers;

use Yii;
use backend\models\Skpppindahbayarlain;
// use backend\models\Skpp;
use backend\models\SkpppindahbayarlainSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkpppindahbayarlainController implements the CRUD actions for Skpppindahbayarlain model.
 */
class SkpppindahbayarlainController extends Controller
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
     * Lists all Skpppindahbayarlain models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SkpppindahbayarlainSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Skpppindahbayarlain model.
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
     * Creates a new Skpppindahbayarlain model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new Skpppindahbayarlain();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionCreate($id)
    {
        $skpppindah = \backend\models\Skpppindah::findOne($id);
        $model = new Skpppindahbayarlain();
        // $model = $model::findOne($id);
        // echo '<pre>';
        // print_r($model);
        // exit;
        $model->nomorskpp = $skpppindah->nomorskpp;
        $model->id_skpppindah = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            // return $this->redirect(['skpp/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionCreateother($id_skpppindah)
    {
        $skpppindah = \backend\models\Skpppindah::findOne($id_skpppindah);
        $model = new Skpppindahbayarlain();
        // $model = $model::findOne($id);
        // echo '<pre>';
        // print_r($model);
        // exit;
        $model->nomorskpp = $skpppindah->nomorskpp;
        $model->id_skpppindah = $id_skpppindah;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            // return $this->redirect(['skpp/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Skpppindahbayarlain model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $skpppindah = \backend\models\Skpppindah::findOne($model->id_skpppindah);
        // $skpp = Skpp::findOne($model->id_skpp);
        // echo '<pre>';
        // print_r($skpp);
        // exit;
        $model->nomorskpp = $skpppindah->nomorskpp;
        $model->id_skpppindah = $skpppindah->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Skpppindahbayarlain model.
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
     * Finds the Skpppindahbayarlain model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Skpppindahbayarlain the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Skpppindahbayarlain::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
