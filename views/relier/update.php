<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Relier */

$this->title = 'Update Relier: ' . $model->Num_Classe;
$this->params['breadcrumbs'][] = ['label' => 'Reliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Num_Classe, 'url' => ['view', 'Num_Classe' => $model->Num_Classe, 'Num_Section' => $model->Num_Section]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="relier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
