<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Eleve */

$this->title = $model->Num_Eleve;
$this->params['breadcrumbs'][] = ['label' => 'Eleves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="eleve-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Num_Eleve], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Num_Eleve], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Num_Eleve',
            'Nom_Eleve:ntext',
            'Prenom_Eleve:ntext',
            'Date_Naiss_Eleve',
            'Lieu_Naiss_Eleve:ntext',
            'Rue_Eleve:ntext',
            'Ville_Eleve:ntext',
            'Code_Postal_Eleve',
        ],
    ]) ?>

</div>
