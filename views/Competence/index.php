<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CompetenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compétence';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competence-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Créer une competence', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num_Competence',
            'Libelle_Competence',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
