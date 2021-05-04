<?php

namespace app\controllers;

use Yii;
use app\models\Lier;
use app\models\LierSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LierController implements the CRUD actions for Lier model.
 */
class LierController extends Controller
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
     * Lists all Lier models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LierSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lier model.
     * @param integer $Num_Eleve
     * @param integer $Num_Section
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Num_Eleve, $Num_Section)
    {
        return $this->render('view', [
            'model' => $this->findModel($Num_Eleve, $Num_Section),
        ]);
    }

    /**
     * Creates a new Lier model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Lier();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Eleve' => $model->Num_Eleve, 'Num_Section' => $model->Num_Section]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Lier model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Num_Eleve
     * @param integer $Num_Section
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Num_Eleve, $Num_Section)
    {
        $model = $this->findModel($Num_Eleve, $Num_Section);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Eleve' => $model->Num_Eleve, 'Num_Section' => $model->Num_Section]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Lier model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Num_Eleve
     * @param integer $Num_Section
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Num_Eleve, $Num_Section)
    {
        $this->findModel($Num_Eleve, $Num_Section)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lier model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Num_Eleve
     * @param integer $Num_Section
     * @return Lier the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Num_Eleve, $Num_Section)
    {
        if (($model = Lier::findOne(['Num_Eleve' => $Num_Eleve, 'Num_Section' => $Num_Section])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
