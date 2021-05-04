<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Enseignant */

$this->title = 'Créer un Enseignant';
$this->params['breadcrumbs'][] = ['label' => 'Enseignants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enseignant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
