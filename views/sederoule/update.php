<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sederoule */

$this->title = 'Update Sederoule: ' . $model->Num_Classe;
$this->params['breadcrumbs'][] = ['label' => 'Sederoules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Classe, 'url' => ['view', 'Num_Classe' => $model->Num_Classe, 'Num_Annee' => $model->Num_Annee]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sederoule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
