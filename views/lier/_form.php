<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Num_Eleve')->textInput() ?>

    <?= $form->field($model, 'Num_Section')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
