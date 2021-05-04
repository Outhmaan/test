<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parents */

$this->title = 'Update Parents: ' . $model->Num_Parent;
$this->params['breadcrumbs'][] = ['label' => 'Parents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Parent, 'url' => ['view', 'id' => $model->Num_Parent]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parents-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
