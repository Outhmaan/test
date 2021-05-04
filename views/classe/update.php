<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Classe */

$this->title = 'Update Classe: ' . $model->Num_Classe;
$this->params['breadcrumbs'][] = ['label' => 'Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Classe, 'url' => ['view', 'id' => $model->Num_Classe]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="classe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
