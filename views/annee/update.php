<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Annee */

$this->title = 'Update Annee: ' . $model->Num_annee;
$this->params['breadcrumbs'][] = ['label' => 'Annees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_annee, 'url' => ['view', 'id' => $model->Num_annee]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="annee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
