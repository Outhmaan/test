<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Responsable */
/* @var $form ActiveForm */
?>
<div class="site-responsable">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Num_Eleve') ?>
        <?= $form->field($model, 'Num_Parent') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-responsable -->
