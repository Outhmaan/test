<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sousdomaine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sousdomaine-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Num_sous_domaine')->textInput() ?>

    <?= $form->field($model, 'Libellé_sous_domaine')->textInput() ?>

    <?= $form->field($model, 'Num_Competence')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
