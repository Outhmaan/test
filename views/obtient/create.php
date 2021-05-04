<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Obtient */

$this->title = 'Obtient';
$this->params['breadcrumbs'][] = ['label' => 'Obtients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obtient-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
