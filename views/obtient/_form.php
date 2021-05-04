<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Obtient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obtient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Date_acquisition')->textInput() ?>

    <?= $form->field($model, 'Num_Competence')->textInput() ?>

    <?= $form->field($model, 'Num_Eleve')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
