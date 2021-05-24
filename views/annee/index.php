<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnneeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Annees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="annee-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Annee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num_annee',
            'Libelle_année',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
