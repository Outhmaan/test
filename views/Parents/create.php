<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parents */

$this->title = 'Créer un Parent';
$this->params['breadcrumbs'][] = ['label' => 'Parents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parents-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
