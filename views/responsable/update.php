<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Responsable */

$this->title = 'Update Responsable: ' . $model->Num_Eleve;
$this->params['breadcrumbs'][] = ['label' => 'Responsables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Eleve, 'url' => ['view', 'Num_Eleve' => $model->Num_Eleve, 'Num_Parent' => $model->Num_Parent]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="responsable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
