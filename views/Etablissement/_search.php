<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EtablissementSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etablissement-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Num_Etablissement') ?>

    <?= $form->field($model, 'Ville') ?>

    <?= $form->field($model, 'Région') ?>

    <?= $form->field($model, 'Pays') ?>

    <?= $form->field($model, 'Num_Classe') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
