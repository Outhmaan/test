<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClasseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classe';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classe-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Créer une classe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num_Classe',
            'Nbre_Eleve',
            'Salle',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
