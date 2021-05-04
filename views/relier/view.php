<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Relier */

$this->title = $model->Num_Classe;
$this->params['breadcrumbs'][] = ['label' => 'Reliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="relier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Num_Classe' => $model->Num_Classe, 'Num_Section' => $model->Num_Section], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Num_Classe' => $model->Num_Classe, 'Num_Section' => $model->Num_Section], [
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
            'Num_Classe',
            'Num_Section',
        ],
    ]) ?>

</div>
