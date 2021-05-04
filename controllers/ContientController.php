<?php

namespace app\controllers;

use Yii;
use app\models\Contient;
use app\models\ContientSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContientController implements the CRUD actions for Contient model.
 */
class ContientController extends Controller
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
     * Lists all Contient models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContientSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Contient model.
     * @param integer $Num_Eleve
     * @param integer $Num_Classe
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Num_Eleve, $Num_Classe)
    {
        return $this->render('view', [
            'model' => $this->findModel($Num_Eleve, $Num_Classe),
        ]);
    }

    /**
     * Creates a new Contient model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Contient();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Eleve' => $model->Num_Eleve, 'Num_Classe' => $model->Num_Classe]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Contient model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Num_Eleve
     * @param integer $Num_Classe
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Num_Eleve, $Num_Classe)
    {
        $model = $this->findModel($Num_Eleve, $Num_Classe);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Eleve' => $model->Num_Eleve, 'Num_Classe' => $model->Num_Classe]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Contient model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Num_Eleve
     * @param integer $Num_Classe
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Num_Eleve, $Num_Classe)
    {
        $this->findModel($Num_Eleve, $Num_Classe)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Contient model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Num_Eleve
     * @param integer $Num_Classe
     * @return Contient the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Num_Eleve, $Num_Classe)
    {
        if (($model = Contient::findOne(['Num_Eleve' => $Num_Eleve, 'Num_Classe' => $Num_Classe])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
