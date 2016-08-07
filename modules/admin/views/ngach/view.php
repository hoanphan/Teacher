<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ngach */

$this->title = $model->id_ngach;
$this->params['breadcrumbs'][] = ['label' => 'Ngaches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ngach-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ngach], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ngach], [
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
            'id_ngach',
            'ten_ngach',
            'quy_chuan',
        ],
    ]) ?>

</div>
