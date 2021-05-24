<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Eleve */

$this->title = 'Create Eleve';
$this->params['breadcrumbs'][] = ['label' => 'Eleves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eleve-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
