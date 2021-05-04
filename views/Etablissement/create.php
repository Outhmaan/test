<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Etablissement */

$this->title = 'Créer un Etablissement';
$this->params['breadcrumbs'][] = ['label' => 'Etablissements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etablissement-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
