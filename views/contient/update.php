<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contient */

$this->title = 'Update Contient: ' . $model->Num_Eleve;
$this->params['breadcrumbs'][] = ['label' => 'Contients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Eleve, 'url' => ['view', 'Num_Eleve' => $model->Num_Eleve, 'Num_Classe' => $model->Num_Classe]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contient-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
