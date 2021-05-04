<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EleveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eleve-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Num_Eleve') ?>

    <?= $form->field($model, 'Nom_Eleve') ?>

    <?= $form->field($model, 'Prenom_Eleve') ?>

    <?= $form->field($model, 'Date_Naiss_Eleve') ?>

    <?= $form->field($model, 'Lieu_Naiss_Eleve') ?>

    <?php // echo $form->field($model, 'Rue_Eleve') ?>

    <?php // echo $form->field($model, 'Ville_Eleve') ?>

    <?php // echo $form->field($model, 'Code_Postal_Eleve') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
