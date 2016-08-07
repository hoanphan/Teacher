<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lop */

$this->title = $model->ten_lop;
$this->params['breadcrumbs'][] = ['label' => 'Lops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lop-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ten_lop], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ten_lop], [
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
            'id_lop',
            'ten_lop',
            'si_so',
            'status',
        ],
    ]) ?>

</div>
