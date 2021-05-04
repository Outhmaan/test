<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lier */

$this->title = $model->Num_Eleve;
$this->params['breadcrumbs'][] = ['label' => 'Liers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Num_Eleve' => $model->Num_Eleve, 'Num_Section' => $model->Num_Section], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Num_Eleve' => $model->Num_Eleve, 'Num_Section' => $model->Num_Section], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Num_Eleve',
            'Num_Section',
        ],
    ]) ?>

</div>
