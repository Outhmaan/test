<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Parents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parents-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nom_Parent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Prenom_Parent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Telephone_Parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rue_Parent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Localite_Parent')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
