<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Obtient */

$this->title = 'Update Obtient: ' . $model->Date_acquisition;
$this->params['breadcrumbs'][] = ['label' => 'Obtients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Date_acquisition, 'url' => ['view', 'id' => $model->Date_acquisition]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obtient-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
