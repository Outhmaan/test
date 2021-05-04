<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Enseignant */
/* @var $form ActiveForm */
?>
<div class="site-enseignant">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Num_Enseignant') ?>
        <?= $form->field($model, 'Nom') ?>
        <?= $form->field($model, 'Prenom') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-enseignant -->
