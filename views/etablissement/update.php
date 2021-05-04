<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Etablissement */

$this->title = 'Update Etablissement: ' . $model->Num_Etablissement;
$this->params['breadcrumbs'][] = ['label' => 'Etablissements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Etablissement, 'url' => ['view', 'id' => $model->Num_Etablissement]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etablissement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
