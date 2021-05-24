<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Parents */

$this->title = $model->Num_Parent;
\yii\web\YiiAsset::register($this);
?>
<div class="parents-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Num_Parent',
            'Nom_Parent:ntext',
            'Prenom_Parent:ntext',
            'Telephone_Parent',
            'Rue_Parent:ntext',
            'Localite_Parent',
        ],
    ]) ?>

</div>
