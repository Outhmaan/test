<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Relier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="relier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Num_Classe')->textInput() ?>

    <?= $form->field($model, 'Num_Section')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
