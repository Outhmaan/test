<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Annee */
/* @var $form ActiveForm */
?>
<div class="site-annee">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Num_annee') ?>
        <?= $form->field($model, 'Libelle_année') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-annee -->
