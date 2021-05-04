<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contient */

$this->title = 'Contient';
$this->params['breadcrumbs'][] = ['label' => 'Contients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contient-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
