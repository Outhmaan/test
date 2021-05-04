<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Eleve */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eleve-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Num_Eleve')->textInput() ?>

    <?= $form->field($model, 'Nom_Eleve')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Prenom_Eleve')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Date_Naiss_Eleve')->textInput() ?>

    <?= $form->field($model, 'Lieu_Naiss_Eleve')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Rue_Eleve')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Ville_Eleve')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Code_Postal_Eleve')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
