<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Competence */

$this->title = 'Update Competence: ' . $model->Num_Competence;
$this->params['breadcrumbs'][] = ['label' => 'Competences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Competence, 'url' => ['view', 'id' => $model->Num_Competence]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="competence-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
