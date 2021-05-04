<?php

namespace app\controllers;

use Yii;
use app\models\Sederoule;
use app\models\SederouleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SederouleController implements the CRUD actions for Sederoule model.
 */
class SederouleController extends Controller
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
     * Lists all Sederoule models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SederouleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sederoule model.
     * @param integer $Num_Classe
     * @param integer $Num_Annee
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Num_Classe, $Num_Annee)
    {
        return $this->render('view', [
            'model' => $this->findModel($Num_Classe, $Num_Annee),
        ]);
    }

    /**
     * Creates a new Sederoule model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sederoule();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Classe' => $model->Num_Classe, 'Num_Annee' => $model->Num_Annee]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sederoule model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Num_Classe
     * @param integer $Num_Annee
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Num_Classe, $Num_Annee)
    {
        $model = $this->findModel($Num_Classe, $Num_Annee);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Classe' => $model->Num_Classe, 'Num_Annee' => $model->Num_Annee]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sederoule model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Num_Classe
     * @param integer $Num_Annee
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Num_Classe, $Num_Annee)
    {
        $this->findModel($Num_Classe, $Num_Annee)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sederoule model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Num_Classe
     * @param integer $Num_Annee
     * @return Sederoule the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Num_Classe, $Num_Annee)
    {
        if (($model = Sederoule::findOne(['Num_Classe' => $Num_Classe, 'Num_Annee' => $Num_Annee])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
