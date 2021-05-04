<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Enseignant */

$this->title = 'Update Enseignant: ' . $model->Num_Enseignant;
$this->params['breadcrumbs'][] = ['label' => 'Enseignants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Enseignant, 'url' => ['view', 'id' => $model->Num_Enseignant]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enseignant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
