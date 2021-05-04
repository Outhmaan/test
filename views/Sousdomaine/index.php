<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SousdomaineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sous-Domaine';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sousdomaine-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Créer un Sous Domaine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num_sous_domaine',
            'Libellé_sous_domaine',
            'Num_Competence',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
