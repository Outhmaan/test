<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Domaine */

$this->title = 'Update Domaine: ' . $model->Num_domaine;
$this->params['breadcrumbs'][] = ['label' => 'Domaines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_domaine, 'url' => ['view', 'id' => $model->Num_domaine]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="domaine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
