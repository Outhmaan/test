<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Eleve */

$this->title = 'Update Eleve: ' . $model->Num_Eleve;
$this->params['breadcrumbs'][] = ['label' => 'Eleves', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Eleve, 'url' => ['view', 'id' => $model->Num_Eleve]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eleve-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
