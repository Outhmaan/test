<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sousdomaine */

$this->title = 'Update Sousdomaine: ' . $model->Num_sous_domaine;
$this->params['breadcrumbs'][] = ['label' => 'Sousdomaines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_sous_domaine, 'url' => ['view', 'id' => $model->Num_sous_domaine]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sousdomaine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
