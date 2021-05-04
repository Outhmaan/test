<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lier';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lier-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Créer Lier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num_Eleve',
            'Num_Section',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
