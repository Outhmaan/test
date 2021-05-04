<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sousdomaine */

$this->title = 'Créer un Sous-Domaine';
$this->params['breadcrumbs'][] = ['label' => 'Sousdomaines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sousdomaine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
