<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Classe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Num_Classe')->textInput() ?>

    <?= $form->field($model, 'Nbre_Eleve')->textInput() ?>

    <?= $form->field($model, 'Salle')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
