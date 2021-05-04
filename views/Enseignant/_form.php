<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Enseignant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enseignant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Num_Enseignant')->textInput() ?>

    <?= $form->field($model, 'Nom')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Prenom')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
