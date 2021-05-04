<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnneeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Années';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="annee-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Créer une année', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num_annee',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
