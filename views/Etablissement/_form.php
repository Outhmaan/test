<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Etablissement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etablissement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Num_Etablissement')->textInput() ?>

    <?= $form->field($model, 'Ville')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Région')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Pays')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Num_Classe')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
