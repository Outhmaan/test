<?php

namespace app\controllers;

use Yii;
use app\models\Relier;
use app\models\RelierSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RelierController implements the CRUD actions for Relier model.
 */
class RelierController extends Controller
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
     * Lists all Relier models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RelierSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Relier model.
     * @param integer $Num_Classe
     * @param integer $Num_Section
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Num_Classe, $Num_Section)
    {
        return $this->render('view', [
            'model' => $this->findModel($Num_Classe, $Num_Section),
        ]);
    }

    /**
     * Creates a new Relier model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Relier();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Classe' => $model->Num_Classe, 'Num_Section' => $model->Num_Section]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Relier model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Num_Classe
     * @param integer $Num_Section
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Num_Classe, $Num_Section)
    {
        $model = $this->findModel($Num_Classe, $Num_Section);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Classe' => $model->Num_Classe, 'Num_Section' => $model->Num_Section]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Relier model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Num_Classe
     * @param integer $Num_Section
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Num_Classe, $Num_Section)
    {
        $this->findModel($Num_Classe, $Num_Section)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Relier model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Num_Classe
     * @param integer $Num_Section
     * @return Relier the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Num_Classe, $Num_Section)
    {
        if (($model = Relier::findOne(['Num_Classe' => $Num_Classe, 'Num_Section' => $Num_Section])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
