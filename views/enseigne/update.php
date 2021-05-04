<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Enseigne */

$this->title = 'Update Enseigne: ' . $model->Num_Enseignant;
$this->params['breadcrumbs'][] = ['label' => 'Enseignes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Enseignant, 'url' => ['view', 'Num_Enseignant' => $model->Num_Enseignant, 'Num_Classe' => $model->Num_Classe]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enseigne-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
