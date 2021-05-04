<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parents-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Num_Parent') ?>

    <?= $form->field($model, 'Nom_Parent') ?>

    <?= $form->field($model, 'Prenom_Parent') ?>

    <?= $form->field($model, 'Telephone_Parent') ?>

    <?= $form->field($model, 'Rue_Parent') ?>

    <?php // echo $form->field($model, 'Ville_Parent') ?>

    <?php // echo $form->field($model, 'Code_Postal_Parent') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
