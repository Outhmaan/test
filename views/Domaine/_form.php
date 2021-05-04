<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Domaine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="domaine-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Num_domaine')->textInput() ?>

    <?= $form->field($model, 'Libellé_domaine')->textInput() ?>

    <?= $form->field($model, 'Num_sous_domaine')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
