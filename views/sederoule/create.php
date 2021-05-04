<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sederoule */

$this->title = 'Se Deroule';
$this->params['breadcrumbs'][] = ['label' => 'Sederoules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sederoule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
