<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Parents */
/* @var $form ActiveForm */
?>
<div class="site-parents">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Nom_Parent') ?>
        <?= $form->field($model, 'Prenom_Parent') ?>
        <?= $form->field($model, 'Telephone_Parent') ?>
        <?= $form->field($model, 'Rue_Parent') ?>
        <?= $form->field($model, 'Localite_Parent') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-parents -->
