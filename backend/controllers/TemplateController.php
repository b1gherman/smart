<?php

namespace backend\controllers;

use Yii;
use backend\models\Template;
use backend\models\TemplateSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TemplateController implements the CRUD actions for Template model.
 */
class TemplateController extends Controller
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
     * Lists all Template models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TemplateSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Template model.
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
     * Creates a new Template model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Template();

        if ($model->load(Yii::$app->request->post())) {
            $gambar = \yii\web\UploadedFile::getInstance($model, 'file');

            if($model->validate()){
                $model->save();
                if (!empty($gambar)) {
                    // $gambar->saveAs(Yii::getAlias('@webroot') . '/template/memo.docx');
                    // $model->file = 'memo.docx';
                    // $model->save(FALSE);
                    $gambar->saveAs(Yii::getAlias('@webroot') . '/template/'.$gambar);
                    $model->file = $gambar;
                    $model->save(FALSE);
                }
            }
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Template model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post())) {
            $gambar = \yii\web\UploadedFile::getInstance($model, 'file');

            if($model->validate()){
                if (!empty($gambar)) {
                    // $gambar->saveAs(Yii::getAlias('@webroot') . '/template/memo.docx');
                    // $model->file = 'memo.docx';
                    // $model->save(FALSE);
                    $gambar->saveAs(Yii::getAlias('@webroot') . '/template/'.$gambar);
                    $model->file = $gambar;
                    $model->save(FALSE);
                }
            }
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Template model.
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
     * Finds the Template model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Template the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Template::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionDownload($id) {
        $download = $this->findModel($id);
        $namafile = null;

        $path = Yii::getAlias('@webroot') .'/template/'. $download->file;

        if ($path) {
            if (file_exists($path)) {
                return \Yii::$app->response->sendFile($path);
            }
        }
        \Yii::$app->session->setFlash("info", "File Tidak ada");
        return $this->redirect(['index']);
    }
}
