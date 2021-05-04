<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RelierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Relier';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relier-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ajouter Relier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num_Classe',
            'Num_Section',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
