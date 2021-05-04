<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EleveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Elève';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eleve-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ajouter un élève', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num_Eleve',
            'Nom_Eleve:ntext',
            'Prenom_Eleve:ntext',
            'Date_Naiss_Eleve',
            'Lieu_Naiss_Eleve:ntext',
            //'Rue_Eleve:ntext',
            //'Ville_Eleve:ntext',
            //'Code_Postal_Eleve',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
