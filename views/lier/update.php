<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lier */

$this->title = 'Update Lier: ' . $model->Num_Eleve;
$this->params['breadcrumbs'][] = ['label' => 'Liers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Eleve, 'url' => ['view', 'Num_Eleve' => $model->Num_Eleve, 'Num_Section' => $model->Num_Section]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
