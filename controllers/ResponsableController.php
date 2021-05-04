<?php

namespace app\controllers;

use Yii;
use app\models\Responsable;
use app\models\ResponsableSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResponsableController implements the CRUD actions for Responsable model.
 */
class ResponsableController extends Controller
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
     * Lists all Responsable models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResponsableSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Responsable model.
     * @param integer $Num_Eleve
     * @param integer $Num_Parent
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Num_Eleve, $Num_Parent)
    {
        return $this->render('view', [
            'model' => $this->findModel($Num_Eleve, $Num_Parent),
        ]);
    }

    /**
     * Creates a new Responsable model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Responsable();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Eleve' => $model->Num_Eleve, 'Num_Parent' => $model->Num_Parent]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Responsable model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Num_Eleve
     * @param integer $Num_Parent
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Num_Eleve, $Num_Parent)
    {
        $model = $this->findModel($Num_Eleve, $Num_Parent);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Num_Eleve' => $model->Num_Eleve, 'Num_Parent' => $model->Num_Parent]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Responsable model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Num_Eleve
     * @param integer $Num_Parent
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Num_Eleve, $Num_Parent)
    {
        $this->findModel($Num_Eleve, $Num_Parent)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Responsable model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Num_Eleve
     * @param integer $Num_Parent
     * @return Responsable the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Num_Eleve, $Num_Parent)
    {
        if (($model = Responsable::findOne(['Num_Eleve' => $Num_Eleve, 'Num_Parent' => $Num_Parent])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
