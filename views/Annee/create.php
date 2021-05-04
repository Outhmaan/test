<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Annee */

$this->title = 'Créer une Année';
$this->params['breadcrumbs'][] = ['label' => 'Annees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="annee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
