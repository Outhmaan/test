<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Relier */

$this->title = 'Relier';
$this->params['breadcrumbs'][] = ['label' => 'Reliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
