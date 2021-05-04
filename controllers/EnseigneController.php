<?php

namespace app\controllers;

use Yii;
use app\models\Enseigne;
use app\models\EnseigneSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EnseigneController implements the CRUD actions for Enseigne model.
 */
class EnseigneController extends Controller
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
     * Lists all Enseigne models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EnseigneSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Enseigne model.
     * @param integer $Num_Enseignant
     * @param integer $Num_Classe
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Num_Enseignant, $Num_Classe)
    {
        return $this->render('view', [
            'model' => $this->findModel($Num_Enseignant, $Num_Classe),
        ]);
    }

    /**
     * Creates a new Enseigne model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Enseigne();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Enseignant' => $model->Num_Enseignant, 'Num_Classe' => $model->Num_Classe]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Enseigne model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Num_Enseignant
     * @param integer $Num_Classe
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Num_Enseignant, $Num_Classe)
    {
        $model = $this->findModel($Num_Enseignant, $Num_Classe);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Enseignant' => $model->Num_Enseignant, 'Num_Classe' => $model->Num_Classe]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Enseigne model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Num_Enseignant
     * @param integer $Num_Classe
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Num_Enseignant, $Num_Classe)
    {
        $this->findModel($Num_Enseignant, $Num_Classe)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Enseigne model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Num_Enseignant
     * @param integer $Num_Classe
     * @return Enseigne the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Num_Enseignant, $Num_Classe)
    {
        if (($model = Enseigne::findOne(['Num_Enseignant' => $Num_Enseignant, 'Num_Classe' => $Num_Classe])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
