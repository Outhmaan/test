<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EtablissementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Etablissements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etablissement-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Etablissement', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num_Etablissement',
            'Ville:ntext',
            'Région:ntext',
            'Pays:ntext',
            'Num_Classe',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
