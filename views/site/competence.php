<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Competence */
/* @var $form ActiveForm */
?>
<div class="site-competence">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Libelle_Competence') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-competence -->
