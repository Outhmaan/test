<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ObtientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Obtient';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obtient-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Créer Obtient', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Date_acquisition',
            'Num_Competence',
            'Num_Eleve',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
