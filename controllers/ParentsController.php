<?php

namespace app\controllers;

use Yii;
use app\models\Parents;
use app\models\ParentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Dompdf\Dompdf;
use Dompdf\Options;



/**
 * ParentsController implements the CRUD actions for Parents model.
 */
class ParentsController extends Controller
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
     * Lists all Parents models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ParentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Parents model.
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
     * Creates a new Parents model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Parents();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Num_Parent]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Parents model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Num_Parent]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Parents model.
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
     * Finds the Parents model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Parents the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Parents::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
	
	public function actionGenPdf($id)
	{
		
		$pdf_content = $this ->renderPartial('view-pdf',['model' => $this ->findModel($id),]);
		//$mpdf = new \Mpdf\Mpdf();
		//$mpdf = new mpdf();
		//$mpdf = new \mPDF();
		//$mpdf = new \mPDF\mpdf();
		//$mpdf = new \mPDF('utf-8','A4','');
		//$mpdf->WriteHTML($pdf_content);
		//$mpdf->Output();
		
		$dompdf = new Dompdf();
		$dompdf->loadHtml($pdf_content);
		$dompdf->setPaper('A4', 'landscape');
		$dompdf->render();
		$dompdf->stream("Livret de Compétence.pdf", array("Attachment" => true));
		//$dompdf->stream();
		
		/*options = new Options();
		$options->set('defaultFont', 'Courier');
		$dompdf = new Dompdf($options);
		

		$options = $dompdf->getOptions();
		$options->setDefaultFont('Courier');
		$dompdf->setOptions($options);*/
		
		exit;
	}
}
